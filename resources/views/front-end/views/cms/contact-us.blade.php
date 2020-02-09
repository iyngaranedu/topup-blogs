@extends('front-end.layouts.default')
@section('content')

    <!-- Title -->
    <h1 class="mt-4">Contact Us</h1>
    <hr>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

    <!-- Map Preview  -->
    <div class="mapouter"><div class="gmap_canvas"><iframe width="674" height="474" id="gmap_canvas" src="https://maps.google.com/maps?q=BCAS%20City%20Campus%2C%20Colombo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.divi-discounts.com">divi-discounts.com</a></div><style>.mapouter{position:relative;text-align:right;height:474px;width:674px;}.gmap_canvas {overflow:hidden;background:none!important;height:474px;width:674px;}</style></div>

    <hr>

    <div class="pb-5">
        <section class="p-3 border bg-light">
            <form class="pb-3">

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>
    </div>


@endsection
