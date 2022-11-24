<x-site-layout title="Add review">

    <x-form method="post" route="{{route('reviews.store')}}" title="" submit="Create">
        {{--        <x-form-input name="city_id" type="number" label="City id" placeholder="give a title of at least 5 characters" value=""/>--}}
        <x-form-select name="city_id" type="number" label="City" value="" options="{{$cities}}"
                       placeholder="Choose city">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </x-form-select>
        <x-form-input name="city_mark" type="number" label="City mark" placeholder="Please put integer between 1 and 5"
                      value=""/>
        <div class="after-add-more">
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
        </div>

    </x-form>

    <div class="copy d-none">
        <div class="border  border-dark">
            <x-form-select name="category_reviews[category_id][]" type="number" label="Category" value="" options="{{$cities}}"
                           placeholder="Choose category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </x-form-select>
            <x-form-input name="category_reviews[mark][]" type="number" label="mark" placeholder="mark" value=""/>
            <x-form-input name="category_reviews[comment][]" type="text" label="comment" placeholder="comment" value=""/>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {

            $(".add-more").click(function () {
                console.log("HRY");
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            $("body").on("click", ".remove", function () {
                $(this).parents(".control-group").remove();
            });

        });

    </script>

</x-site-layout>
