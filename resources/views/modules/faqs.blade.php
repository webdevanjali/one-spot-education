@extends('layouts.app')

@section('title', 'FAQs, Frequently Asked Questions | One Spot Education | Innovative learning for university students')

@section('content')
<div class="container-fluid p-4">
    <div class="row">
      <div class="col-md-4">
        <div class=" bg-white p-4 rounded shadow-sm">
          <small class="text-muted">FAQ</small>
          <h1 class="mt-3">Common Questions</h1>
          <p>Here are some of the most common questions that we get:</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="content">
          <div class="faq-item mb-4">
            <p class="question font-weight-bold">How can I access my online class schedule?</p>
            <p class="answer">You can access your online class schedule by logging into your student user profile dashboard.</p>
          </div>
          <div class="faq-item mb-4">
            <p class="question font-weight-bold">Can I make changes to my class schedule?</p>
            <p class="answer">Yes, you can make changes to your class schedule by selecting the 'Edit Schedule' option on your dashboard.</p>
          </div>
          <div class="faq-item mb-4">
            <p class="question font-weight-bold">What should I do if I encounter technical issues during a class?</p>
            <p class="answer">If you encounter technical issues during a class, please reach out to our technical support team for assistance.</p>
          </div>
          <div class="faq-item mb-4">
            <p class="question font-weight-bold">How do I join an online class session?</p>
            <p class="answer">To join an online class session, click on the 'Join Class' button next to the scheduled class on your dashboard.</p>
          </div>
          <div class="faq-item mb-4">
            <p class="question font-weight-bold">Can I view past class recordings?</p>
            <p class="answer">Yes, you can view past class recordings by accessing the 'Class Recordings' section on your student user profile dashboard.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush