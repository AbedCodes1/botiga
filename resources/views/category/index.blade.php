<div class="featured-category">
    <div class="container">
        <div class="text-center secondary-title">Featured Categories</div>
        <div class="text-center">Give your customers insight into your product collection. Select imagery and name that relates to the product category.        </div>
        <div class="flex categories">
            @foreach ($categories as $category)
                <a href="{{$category->slug}}">
                    <div class="category">
                        <div class="category-image">
                            <img src="/images/category/{{$category->image}}" alt="">
                        </div>
                        <div class="category-name text-center">{{$category->name}}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>