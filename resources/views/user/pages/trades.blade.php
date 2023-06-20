@extends("user.layout.layout")
@section('title','Trades')
@section('content')
<section class="container my-5">
        <div class="py-4">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/beautician.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Beautician</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
                                sapiente, ratione consequuntur et amet obcaecati maiores nostrum sequi pariatur
                                exercitationem quaerat perspiciatis possimus quisquam voluptas aperiam sit tenetur,
                                consectetur animi.</p>
                            <p class="card-text">Instructor: <a href="faculty.html">Ma'am Tanzila</a></p>
                            <p class="card-text">Duration: 6 Months</p>
                            <p class="card-text">Qualification Required: F.Sc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/web.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Web Designing & Development</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
                                sapiente, ratione consequuntur et amet obcaecati maiores nostrum sequi pariatur
                                exercitationem quaerat perspiciatis possimus quisquam voluptas aperiam sit tenetur,
                                consectetur animi.</p>
                            <p class="card-text">Instructor: <a href="faculty.html">Ma'am Mehnaz</a></p>
                            <p class="card-text">Duration: 6 Months</p>
                            <p class="card-text">Qualification Required: F.Sc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/Dress-Making.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Dress Making</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
                                sapiente, ratione consequuntur et amet obcaecati maiores nostrum sequi pariatur
                                exercitationem quaerat perspiciatis possimus quisquam voluptas aperiam sit tenetur,
                                consectetur animi.</p>
                            <p class="card-text">Instructor: <a href="faculty.html">Ma'am Anila</a></p>
                            <p class="card-text">Duration: 6 Months</p>
                            <p class="card-text">Qualification Required: F.Sc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/images/embroidery.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h2 class="card-title fw-bold">Embroidery</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis
                                sapiente, ratione consequuntur et amet obcaecati maiores nostrum sequi pariatur
                                exercitationem quaerat perspiciatis.<span id="dots">...</span>
                                <div id="more" class="d-none">
                                    Embroidery Categories:
                                    <ul>
                                        <li>Counted Thread Embroidery</li>
                                        <li>Outline Embroidery</li>
                                        <li>Candlewicking Embroidery</li>
                                        <li>Fish Scale Embroidery</li>
                                        <li>Paint Embroidery</li>
                                    </ul>
                                </div>
                            </p>
                            <button onclick="myFunction()" id="myBtn">Read more</button>
                            <p class="card-text">Instructor: <a href="faculty.html">Ma'am Anila</a></p>
                            <p class="card-text">Duration: 6 Months</p>
                            <p class="card-text">Qualification Required: F.Sc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection