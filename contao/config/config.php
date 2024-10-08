<?php

declare(strict_types=1);

/*
 * This file is part of the ContaoIsotopePdfTemplatesBundle bundle.
 *
 * (c) inspiredminds
 *
 * @license LGPL-3.0-or-later
 */

use InspiredMinds\ContaoIsotopePdfTemplatesBundle\Isotope\Model\Document\Template;
use Isotope\Model\Document;

Document::registerModelType('template', Template::class);
