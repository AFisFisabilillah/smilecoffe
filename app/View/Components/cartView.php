<?php

namespace App\View\Components;

use App\Models\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cartView extends Component
{
    public $carts;
    public function __construct()
    {
        if(auth()->hasUser()){
            $this->carts =  Cart::where("id_user", auth()->user()->id)->latest()->get();
        }
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cart-view');
    }

    
}
