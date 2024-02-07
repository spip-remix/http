<?php

namespace Spip\Component\Http;

use Psr\Http\Server\MiddlewareInterface as PsrMiddlewareInterface;
use Spip\Component\Pipeline\MiddlewareInterface as PipelineMiddlewareInterface;

interface HttpMiddlewareInterface extends PipelineMiddlewareInterface, PsrMiddlewareInterface
{
}