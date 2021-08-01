
@forelse ($products as $key => $product)
<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
    <div class="product-inner pr">
        <div class="product-image pr oh lazyload">
            @if($key == 0)
            <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
            @endif
            <a class="d-block" href="{{ route('frontend.productDetails', $product->id ?? '') }}">
                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
            </a>
            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
            </div>
            <div class="hover_button op__0 tc pa flex column ts__03">
           
                {{-- <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                                <input type="hidden" name="cart_amount" value="1"> --}}
                                <a href="{{ route('frontend.productDetails', $product->id ?? '') }}" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                            </a>
                            </form>
            </div>
        </div>
        <div class="product-info mt__15">
            <h3 class="product-title pr fs__14 mg__0 fwm">
                <a class="cd chp" href="{{ route('frontend.productDetails', $product->id ?? '') }}">{{ $product->prod_title_en }}</a>
            </h3>
            <span class="price dib mb__5">QAR {{ $product->price }}</span>
        </div>
    </div>
</div>
@empty 
<p>Oops !! Nothing found...</p>
@endforelse