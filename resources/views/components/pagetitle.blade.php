@props(['name', 'imgUrl'])

<!-- start page title section -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="5" data-background="{{asset($imgUrl)}}">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>{{ $name }}</h1>
            </div>
            <div class="col-md-12">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="javascript:void(0)">{{ $name }}</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- Content Section -->
