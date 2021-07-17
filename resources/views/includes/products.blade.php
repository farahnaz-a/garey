
@forelse ($products as $key => $product)
<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
    <div class="product-inner pr">
        <div class="product-image pr oh lazyload">
            @if($key == 0)
            <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
            @endif
            <a class="d-block" href="product-detail-layout-01.html">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
            </div>
            <div class="hover_button op__0 tc pa flex column ts__03">
           
                <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
            </div>
        </div>
        <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="product-detail-layout-01.html">{{ $product->prod_title_en }}</a>
            </h3>
            <span class="price dib mb__5">QAR {{ $product->price }}</span>
        </div>
    </div>
</div>
@empty 
<p>Oops !! Nothing found...</p>
@endforelse