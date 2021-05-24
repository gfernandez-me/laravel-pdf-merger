<?php

namespace GFernandezMe\LaravelPDFMerger\Facades;

use \Illuminate\Support\Facades\Facade;

class PDFMergerFacade extends Facade {

  protected static function getFacadeAccessor() {
      return 'PDFMerger';
  }

}
