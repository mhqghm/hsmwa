<x-site-layout title="Edit review">

    <x-form method="post" route="{{route('reviews.update', $review->id)}}" title="" submit="Edit">
        @method('put')

        <x-form-input name="city_id" type="number" label="City id" placeholder="give a title of at least 5 characters"
                      value="{{$review->city->id}}"/>
        <x-form-input name="city_mark" type="number" label="City mark" placeholder="Please put integer between 1 and 5"
                      value="{{$review->city_mark}}"/>

        <div class="after-add-more">
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
        </div>

        @foreach($review->categories as $category)
            <div class="border  border-dark">
                <x-form-input name="category_reviews[category_id][]" type="number" label="category_id"
                              placeholder="cola1"
                              value="{{$category->id}}"/>
                <x-form-input name="category_reviews[mark][]" type="number" label="mark" placeholder="cola2"
                              value="{{$category->pivot->mark}}"/>
                <x-form-input name="category_reviews[comment][]" type="text" label="comment" placeholder="cola3"
                              value="{{$category->pivot->comment}}"/>
            </div>
        @endforeach

    </x-form>

    <x-form method="post" route="{{route('reviews.destroy', $review->id)}}" title="" submit="Destroy">
        @method('delete')
    </x-form>


        <div class="copy d-none">
            <div class="border  border-dark">
                <x-form-input name="category_reviews[category_id][]" type="number" label="category_id"
                              placeholder="cola1"
                              value=""/>
                <x-form-input name="category_reviews[mark][]" type="number" label="mark" placeholder="cola2" value=""/>
                <x-form-input name="category_reviews[comment][]" type="text" label="comment" placeholder="cola3"
                              value=""/>
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
