<?php

/*
 * This file is part of Mandango.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mandango\Mondator;

use Mandango\Mondator\Definition\Definition as BaseDefinition;

/**
 * Definitions to save with the extensions. Allows save the output.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 *
 * @api
 */
class Definition extends BaseDefinition
{
    /**
     * @var Output
     */
    private $output;

    /**
     * @var string
     */
    private $path;

    /**
     * Constructor.
     *
     * @param string $class  The class.
     * @param Output $output The output.
     * @param string $path   path inside output dir.
     *
     * @api
     */
    public function __construct($class, Output $output, $path = null)
    {
        parent::__construct($class);

        $this->setOutput($output);
        $this->setPath($path);
    }

    /**
     * Set the output.
     *
     * @param Output $output The output.
     *
     * @api
     */
    public function setOutput(Output $output)
    {
        $this->output = $output;
    }

    /**
     * Returns the output.
     *
     * @return Output The output.
     *
     * @api
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param string $path
     */
    public function setPath($path = null)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        if ($this->path) {
            return $this->path;
        } else {
            return str_replace('\\', DIRECTORY_SEPARATOR, $this->getClass()).'.php';
        }
    }
}
