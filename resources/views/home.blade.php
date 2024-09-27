@extends('layouts.app')

@section('title', 'Home Page|One Spot Education | Innovative learning for university students')

@push('scripts')
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const successModal = document.getElementById('successModal');
          const successMessage = document.getElementById('successMessage');

          // Function to show the modal
          function showModal(message) {
              successMessage.innerHTML = `<div class="alert alert-success">${message}</div>`;
              successModal.classList.add('show');
              successModal.style.display = 'block';
              successModal.style.opacity = 1; // Ensure the opacity is set for the fade-in effect
          }

          // Function to hide the modal
          function hideModal() {
              successModal.classList.remove('show');
              successModal.style.display = 'none';
              successModal.style.opacity = 0; // Reset opacity
          }

          // Check if there's a success message in the session
          @if (session('success'))
              console.log('Session success message found:', '{{ session('success') }}');
              showModal('{{ session('success') }}');
          @else
              console.log('No success message found in session');
          @endif

          // Attach hideModal function to the close buttons and modal backdrop
          const closeButtons = document.querySelectorAll('[data-bs-dismiss="modal"]');
          closeButtons.forEach(button => {
              button.addEventListener('click', hideModal);
          });

          // Optional: Close modal when clicking outside of it
          successModal.addEventListener('click', function(event) {
              if (event.target === successModal) {
                  hideModal();
              }
          });
      });
  </script>

@endpush

@section('success')
  <!-- Success Message Modal -->
  <div id="successModal" class="modal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="successModalLabel">Success</h5>
                  <button type="button" class="btn-close" aria-label="Close" onclick="hideModal()" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                  <!-- Success message will be dynamically set by JavaScript -->
                  <div id="successMessage"></div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" onclick="hideModal()" data-bs-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
@endsection


@section('main-banner')

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" id="section1" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="{{ asset('home/assets/images/course-video.mp4')}}" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>INNOVATIVE LEARNING FOR UNIVERSITY STUDENTS</h6>
              <h2><em>ONE SPOT</em> EDUCATION</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="{{ route('login') }}">Discover more</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>All Courses</h4>
              </div>
              <div class="content-hide">
                <p>The OneSpotEducation offers a comprehensive range of universitycourses including undergraduate programs, postgraduate programs,certificates and diploma courses Through these courses OneSpotEducation aims to empower students with the education and skills necessary to succeed in their chosen fields.
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
              </div>
              <div class="content-hide">
                <p>COffer both live and recorded classes to cater to different learning preferences and accommodate various schedules, ensuring flexibility and accessibility for students. Facilitate collaboration and interaction between students and educators through class chat functionality, encouraging active participation, peer- to-peer learning, and immediate feedback.</p>
                <p class="hidden-sm">Hidden content.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>ONLINE REGISTRATION</h4>
              </div>
              <div class="content-hide">
                <p>Click here for online registration and admission module of online programmes</p>
                <p class="hidden-sm">hidden data.</p>
                <div class="scroll-to-section"><a href="{{ route('register') }}">Apply Now</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('about')

  <section class="section why-us" data-section="section2" id="section2" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Grad School?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Quality Meeting</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ asset('home/assets/images/choose-us-image-01.png') }}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>One Spot Education Provides</h4>
                    <p> <b>Digitize Education: </b> Transform the traditional education system into adigital environment, enabling educational agencies, schools, universities, and other institutions to embrace technology and enhance the learning experience</p>
                    <p><b>Live and Recorded Classes: </b>Offer both live and recorded classes to cater to different learning preferences and accommodate various schedules, ensuring flexibility and accessibility for students.</p>
                    <p><b>Foster Collaboration and Engagement: </b>Facilitate collaboration and interaction between students and educators through class chat functionality, encouraging active participation, peer-to-peer learning, and immediate feedback.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ asset('home/assets/images/choose-us-image-02.png') }}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                    <p><b>Streamline Administrative Tasks: </b>utomate administrative tasks such as attendance tracking, homework submission, and assessment management to reduce paperwork, optimize efficiency, and free up time for educators and administrators.</p>
                    <p><b>Centralize Syllabus and Course Management: </b>Provide a centralized platform for syllabus organization, assignment distribution, and practical management, simplifying educational resource management and promoting transparency.</p>
                    <p><b>Data-Driven Insights: </b>Generate comprehensive analytics and reports on student performance, engagement levels, and learning outcomes, empowering educators and administrators to make data- driven decisions for continuous improvement.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="{{ asset('home/assets/images/choose-us-image-03.png') }}" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
                    <p>One Spot Education support scheduling and delivery of live online classes, with interactive features like chat and Q&A. Recorded classes should be accessible for on-demand viewing and provide communication channels like discussion forums and private messaging for students, educators, and parents to interact and collaborate. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact us</a> now.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('courses')
  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Choose Your Course</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-01.jpg') }}" alt="Course #1">
            <div class="down-content">
              <h4>Digital Marketing</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-01.png') }}" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-02.jpg') }}" alt="Course #2">
            <div class="down-content">
              <h4>Business World</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-02.png') }}" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-03.jpg') }}" alt="Course #3">
            <div class="down-content">
              <h4>Media Technology</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-03.png') }}" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-04.jpg') }}" alt="Course #4">
            <div class="down-content">
              <h4>Communications</h4>
              <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-04.png') }}" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-05.jpg') }}" alt="">
            <div class="down-content">
              <h4>Business Ethics</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-05.png') }}" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-01.jpg') }}" alt="">
            <div class="down-content">
              <h4>Photography</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-01.png') }}" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-02.jpg') }}" alt="">
            <div class="down-content">
              <h4>Web Development</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-02.png') }}" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-03.jpg') }}" alt="">
            <div class="down-content">
              <h4>Learn HTML CSS</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-03.png') }}" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-04.jpg') }}" alt="">
            <div class="down-content">
              <h4>Social Media</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-04.png') }}" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-05.jpg') }}" alt="">
            <div class="down-content">
              <h4>Digital Arts</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-05.png') }}" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="{{ asset('home/assets/images/courses-01.jpg') }}" alt="">
            <div class="down-content">
              <h4>Media Streaming</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="{{ asset('home/assets/images/author-01.png') }}" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('coming-soon')
  <section class="section coming-soon" data-section="section3" id="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Take <em>any online course</em> and win $326 for your next class</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">00</div>
                  <span>Days</span>
                </div>

                <div class="hours">
                  <div class="value">00</div>
                  <span>Hours</span>
                </div>

                <div class="minutes">
                  <div class="value">00</div>
                  <span>Minutes</span>
                </div>

                <div class="seconds">
                  <div class="value">00</div>
                  <span>Seconds</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Get it now</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('intro-video') 

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about Grad School</em></h4>
            <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.
            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
            <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Power HTML Template</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="{{ asset('home/assets/images/main-thumb.png') }}"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>
 
@endsection

@section('contact')
    
  <section class="section contact" id="feedback" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">   
          <!-- Your feedback form here -->
          <form id="feedback-form" action="{{ route('feedback.store') }}" method="post">
              @csrf
              
              <div class="row">
                  <!-- Hidden fields -->
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="user_id" type="number" class="form-control" id="user_id" placeholder="Your User ID (Optional)">
                      </fieldset>
                  </div>
                  <!-- Sender Name -->
                  <div class="col-md-6">
                      <fieldset>
                          <input name="sender_name" type="text" class="form-control" id="sender_name" placeholder="Your Name">
                      </fieldset>
                  </div>
                  <!-- Sender Email -->
                  <div class="col-md-6">
                      <fieldset>
                          <input name="sender_email" type="email" class="form-control" id="sender_email" placeholder="Your Email">
                      </fieldset>
                  </div>
                  <!-- Other hidden fields -->
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="student_id" type="number" class="form-control" id="student_id" placeholder="Student ID (Optional)">
                      </fieldset>
                  </div>
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="teacher_id" type="number" class="form-control" id="teacher_id" placeholder="Teacher ID (Optional)">
                      </fieldset>
                  </div>
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="course_id" type="number" class="form-control" id="course_id" placeholder="Course ID (Optional)">
                      </fieldset>
                  </div>
                  <div class="col-md-12">
                      <fieldset>
                          <textarea name="feedback_text" rows="6" class="form-control" id="feedback_text" placeholder="Your Feedback" required></textarea>
                      </fieldset>
                  </div>
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="rating" type="number" min="1" max="5" class="form-control" id="rating" placeholder="Rating (1-5)">
                      </fieldset>
                  </div>
                  <div class="col-md-6" hidden>
                      <fieldset>
                          <input name="media" type="text" class="form-control" id="media" placeholder="Media URL (Optional)">
                      </fieldset>
                  </div>
                  <div class="col-md-12">
                      <fieldset>
                          <button type="submit" id="form-submit" class="button">Submit Feedback</button>
                      </fieldset>
                  </div>
              </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
