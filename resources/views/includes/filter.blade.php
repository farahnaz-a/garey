<div class="row wrap_filter"> 
    <div class="col-12 col-md-6 widget">
       <h5 class="widget-title">By Price</h5>
       <div class="loke_scroll">
           <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="or">
               <li id="1" price="50,100">
                   <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
               </li>
               <li id="2">
                   <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
               </li>
               <li id="3">
                   <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
               </li>
               <li id="4">
                   <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
               </li>
               <li id="5">
                   <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
               </li>
               <li id="6">
                   <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
               </li>
           </ul>
       </div>
   </div> 
   
   <div class="col-12 col-md-6 widget">
       <h5 class="widget-title">By Brand</h5>
       <div class="loke_scroll">
           <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="or">
              @foreach ($brands as $item)
              <li class="ddd" id="chck{{ $item->manufacture_en ?? '' }}">
               <a href="#" aria-label="Narrow selection to products matching tag vendor">{{ $item->manufacture_en }}</a>
             </li>
              @endforeach
           </ul>
       </div>
   </div> 
    <div class="col-12 tc mt__20 mb__20 dn">
       <a class="button clear_filter_js" href="#" id="clear">Clear Filter</a></div>
</div>

