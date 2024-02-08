<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Generator\Dumper;

use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;

/**
 * CompiledUrlGeneratorDumper creates a PHP array to be used with CompiledUrlGenerator.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <https://tobion.de>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CompiledUrlGeneratorDumper extends GeneratorDumper
{
    public function getCompiledRoutes(): array
    {
        $compiledRoutes = [];
        foreach ($this->getRoutes()->all() as $name => $route) {
            $compiledRoute = $route->compile();

            $compiledRoutes[$name] = [
                $compiledRoute->getVariables(),
                $route->getDefaults(),
                $route->getRequirements(),
                $compiledRoute->getTokens(),
                $compiledRoute->getHostTokens(),
                $route->getSchemes(),
            ];
        }

        return $compiledRoutes;
    }

    /**
     * {@inheritdoc}
     */
    public function dump(array $options = [])
    {
        return <<<EOF
<?php

// This file has been auto-generated by the Symfony Routing Component.

return [{$this->generateDeclaredRoutes()}
];

EOF;
    }

    /**
     * Generates PHP code representing an array of defined routes
     * together with the routes properties (e.g. requirements).
     */
    private function generateDeclaredRoutes(): string
    {
        $routes = '';
        foreach ($this->getCompiledRoutes() as $name => $properties) {
            $routes .= sprintf("\n    '%s' => %s,", $name, CompiledUrlMatcherDumper::export($properties));
        }

        return $routes;
    }
}
