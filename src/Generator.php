<?php

namespace EluminaElearning\Event;

class Generator implements GeneratorInterface
{
    use GeneratorTrait {
        addEvent as public;
    }
}
