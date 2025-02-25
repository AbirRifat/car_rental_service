@extends('layouts.frontend')

@section('content')
    <div class="bg-light ">
        <div class="container">
            <h1 class="text-center mb-5">Contact Us</h1>

            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Get in Touch</h2>
                            <ul class="list-unstyled" style="list-style-type: none; padding-left: 0;">
                                <li class="mb-3" style="display: flex; align-items: center;">
                                    <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                                    123 Car Rental Street, City, Country 12345
                                </li>
                                <li class="mb-3" style="display: flex; align-items: center;">
                                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                                    <a href="tel:+1234567890" class="text-decoration-none">+1 (234) 567-890</a>
                                </li>
                                <li class="mb-3" style="display: flex; align-items: center;">
                                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                                    <a href="mailto:info@carrentalservice.com"
                                        class="text-decoration-none">info@carrentalservice.com</a>
                                </li>
                                <li class="mb-3" style="display: flex; align-items: center;">
                                    <i class="bi bi-clock-fill text-primary me-2"></i>
                                    <div>
                                        Mon-Fri: 8:00 AM - 8:00 PM<br>
                                        Sat-Sun: 9:00 AM - 6:00 PM
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Our Location</h2>
                            <div style="height: 250px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a47df06b185%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1623164983123!5m2!1sen!2sus"
                                    style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Frequently Asked Questions</h2>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What documents do I need to rent a car?
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            You'll need a valid driver's license, a credit card in your name, and proof of
                                            insurance. International renters may need additional documentation.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is there a mileage limit?
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Most of our rentals come with unlimited mileage. However, some specialty
                                            vehicles may have mileage restrictions. Please check the specific terms for your
                                            rental.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Connect With Us</h2>
                            <p class="mb-4">Stay updated with our latest offers and news by following us on social media:
                            </p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="text-decoration-none fs-2 mx-3">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="text-decoration-none fs-2 mx-3">
                                    <i class="fa-brands fa-x-twitter" style="color: #404040"></i>
                                </a>
                                <a href="#" class="text-decoration-none fs-2 mx-3">
                                    <i class="fab fa-instagram" style="color: #f11e1e"></i>
                                </a>
                                <a href="#" class="text-decoration-none fs-2 mx-3">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
