 @forelse($carts as $item)
                        <div class="mini_cart_item js_cart_item flex al_center pr oh">
                            <div class="ld_cart_bar"></div>
                            <a href="{{ route('frontend.productDetails', $item->get_product->id ?? '') }}" class="mini_cart_img">
                                <img class="w__100 lazyload" data-src="{{ asset('web_images/products/thumb') }}/{{ $item->get_product->id }}.jpg" width="120" height="153" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTUzIiB2aWV3Qm94PSIwIDAgMTIwIDE1MyI+PC9zdmc+">
                            </a>
                            <div class="mini_cart_info">
                                <a href="{{ route('frontend.productDetails', $item->get_product->id ?? '') }}" class="mini_cart_title truncate">{{ $item->get_product->prod_title_en }}</a>
                                <div class="mini_cart_meta">
                                    <p class="cart_selling_plan"></p>
                                    <div class="cart_meta_price price">
                                        <div class="cart_price">
                                            {{-- <del>$60.00</del> --}}
                                            <ins>QAR {{ $item->get_product->price }}</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_actions">
                                    <div class="quantity pr mr__10 qty__true">
                                        <input type="number" name="cart_amount{{ $item->id }}" class="input-text qty text tc qty_cart_js" step="1" min="0" max="9999" value="{{ $item->cart_amount }}">
                                        <div class="qty tc fs__14">
                                            <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                <i class="facl facl-plus"></i>
                                            </button>
                                            <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                                                <i class="facl facl-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <a style="cursor: pointer" class="rem" id="remove{{ $item->id }}"><span class="tt_txt">Remove this item</span>
                                        Remove
                                    </a>
                                    <input type="hidden" name="product_id{{ $item->id }}" value="{{ $item->get_product->id ?? '' }}">
                                 
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="{{ url('/products') }}">Return To Shop</a>
                        </p>
                    </div>
                    @endforelse