@extends("user.layout.layout")
@section('title','Contact Us')
@section('content')
    <!-- Contact Form Start -->
    <section class="container">
        <div class="border-1 rounded-5 d-flex my-5"
            style="box-shadow: 0px 0px 48px 12px rgba(0, 0, 0, 0.05);margin: 100px 0px !important; ">
            <div class="roud p-3 text-white " style="background-color:#162239; width: 40%;">
                <div class="rounded-2 d-flex m-4" style="background-color: #164191;">
                    <div class="m-2">
                        <i class="bi bi-geo-alt fs-4 rounded-circle py-1 px-2" style="background-color:blue"></i>
                    </div>
                    <div>
                        <h2 class="mb-0 pt-1">Location:</h2>
                        <p>
                            Gulmerg Road, Inside Zari College, Rahim Yar Khan
                        </p>
                    </div>
                </div>

                <div class="d-flex rounded-2 m-4 pb-3 " style="background-color: #164191;">
                    <div class="m-2">
                        <i class="bi bi-envelope fs-4 rounded-circle py-1 px-2" style="background-color:blue"></i>
                    </div>
                    <div>
                        <h2 class="mb-0 pt-1">Email:</h2>
                        <p>vtiryk74@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex rounded-2 m-4 pb-3" style="background-color: #164191;">
                    <div class="m-2">
                        <i class="bi bi-phone fs-4 rounded-circle py-1 px-2" style="background-color:blue"></i>
                    </div>
                    <div>
                        <h2 class="mb-0 pt-1">Call:</h2>
                        <p>+92 3006472719</p>
                    </div>
                </div>
                <div class="d-flex rounded-2 m-4 pb-3" style="background-color: #164191;">
                    <div class="m-2">
                        <i class="bi bi-clock fs-4 rounded-circle py-1 px-2" style="background-color:blue"></i>
                    </div>
                    <div>
                        <h2 class="mb-0 pt-1">Open Hours:</h2>
                        <p>Mon-Fri: 8AM-6PM</p>
                    </div>
                </div>


            </div>

            <div class="rounded-2 p-3 pt-4 my-4" style="width: 60%; ">
                <form action="" method="post">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name" class="form-control " required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <textarea name="textare" id="text" cols="30" rows="10" placeholder="Message"
                                class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="col">
                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
    </section>
    <!-- Contact Form End -->
@endsection