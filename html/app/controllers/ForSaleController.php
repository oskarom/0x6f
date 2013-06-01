<?php

class ForSaleController extends BaseController {

	public function index() 
	{
		//$forsaleitems=ForSaleItem::all();

		//return View::make(dd($forsaleitems));
		return View::make('forsale.index')->with('forsaleitems', ForSaleItem::all());
	}
}