<?php
 
namespace App\Http\Controllers;
 
use App\Sample;
 
class SamplesController extends Controller
{
    protected $sample;
 
    public function __construct(Sample $sample)
    {
        $this->sample = $sample;
    }
 
    public function getIndex()
    {
        $samples = $this->sample->all();
        return view('sample.index', compact('samples'));
    }
}

