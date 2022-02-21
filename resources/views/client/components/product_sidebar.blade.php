<div class="col-md-3 col-md-pull-9">
    <div class="h4 col-xs-b10">popular categories</div>
    <ul class="categories-menu transparent">
        @foreach($categories as $category)
            <li>
                <a href="#">{{ $category->category_name }}</a>
                <div class="toggle"></div>
                <ul>
                    @foreach($category->categoryChildren as $categoryChild)                          
                    <li>
                        <a href="#">{{ $categoryChild->category_name }}</a>
                        <div class="toggle"></div>
                        <ul>
                            @foreach($categoryChild->categoryChildren as $categoryGrandChild)
                            <li>
                                <a href="#">{{ $categoryGrandChild->category_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="h4 col-xs-b25">Price</div>
    <div id="prices-range"></div>
    <div class="simple-article size-1">PRICE: <b class="grey">$<span class="min-price">40</span> - $<span class="max-price">300</span></b></div>

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="h4 col-xs-b25">Brands</div>
    @foreach($brands as $brand)
    <label class="checkbox-entry">
        <input type="checkbox"><span>{{ $brand->brand_name}}</span>
        </label>
        <div class="empty-space col-xs-b10"></div>
    @endforeach


    {{-- <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="h4 col-xs-b25">Choose Color</div>
    <div class="color-selection size-1">
        <div class="entry active" style="color: #a7f050;"></div>
        <div class="entry" style="color: #50e3f0;"></div>
        <div class="entry" style="color: #eee;"></div>
        <div class="entry" style="color: #4d900c;"></div>
        <div class="entry" style="color: #edb82c;"></div>
        <div class="entry" style="color: #7d3f99;"></div>
        <div class="entry" style="color: #3481c7;"></div>
        <div class="entry" style="color: #bf584b;"></div>
    </div> --}}

    {{-- <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="h4 col-xs-b25">Operation System</div>
    <label class="checkbox-entry">
        <input type="checkbox"><span>Android</span>
    </label>
    <div class="empty-space col-xs-b10"></div>
    <label class="checkbox-entry">
        <input type="checkbox"><span>IOS</span>
    </label>
    <div class="empty-space col-xs-b10"></div>
    <label class="checkbox-entry">
        <input type="checkbox"><span>Windows Phone</span>
    </label>
    <div class="empty-space col-xs-b10"></div>
    <label class="checkbox-entry">
        <input type="checkbox"><span>Symbian</span>
    </label>
    <div class="empty-space col-xs-b10"></div>
    <label class="checkbox-entry">
        <input type="checkbox"><span>Blackberry OS</span>
    </label> --}}

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="h4 col-xs-b25">Popular Tags</div>
    <div class="tags light clearfix">
        <a class="tag">headphoness</a>
        <a class="tag">accessories</a>
        <a class="tag">new</a>
        <a class="tag">wireless</a>
        <a class="tag">cables</a>
        <a class="tag">devices</a>
        <a class="tag">gadgets</a>
        <a class="tag">brands</a>
        <a class="tag">replacements</a>
        <a class="tag">cases</a>
        <a class="tag">cables</a>
        <a class="tag">professional</a>
    </div>

    <div class="empty-space col-xs-b25 col-sm-b50"></div>


</div>