<?php

namespace Eufony\Inflector\Tests;

use Eufony\Inflector\InflectorInterface;
use Eufony\Inflector\NullInflector;

/**
 * Unit tests for `\Eufony\Inflector\NullInflector`.
 */
class NullInflectorTest extends AbstractInflectorTest
{
    /**
     * @inheritDoc
     */
    public function getInflector(): InflectorInterface
    {
        return new NullInflector();
    }

    /**
     * @dataProvider cases
     */
    public function testToPascalCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($snake, $this->inflector->toPascalCase($snake));
        $this->assertEquals($camel, $this->inflector->toPascalCase($camel));
    }

    /**
     * @dataProvider cases
     */
    public function testToSnakeCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($pascal, $this->inflector->toSnakeCase($pascal));
        $this->assertEquals($camel, $this->inflector->toSnakeCase($camel));
    }

    /**
     * @dataProvider cases
     */
    public function testToCamelCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($pascal, $this->inflector->toCamelCase($pascal));
        $this->assertEquals($snake, $this->inflector->toCamelCase($snake));
    }

    /**
     * @dataProvider words
     */
    public function testPluralize(string $singular, string $plural)
    {
        $this->assertEquals($singular, $this->inflector->pluralize($singular));
    }

    /**
     * @dataProvider words
     */
    public function testSingularize(string $singular, string $plural)
    {
        $this->assertEquals($plural, $this->inflector->singularize($plural));
    }
}
