@extends('layouts.app')

@section('title','Bsit')
   

@section('content')
<style>
    .img-gallery {
        width: 100%;
        height: auto;
        max-width: 100%; 
        max-height: 600px; 
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-top: 30px;
        object-fit: cover; 
    }

    .img-gallery:hover {
        transform: scale(1.05);
    }

    .title-section {
        margin-top: 100px;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        margin-bottom: 30px;
    }

    .title-section h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        font-weight: bold;
    }

    .title-section h3 {
        margin-top: 30px;
        margin-bottom: 20px;
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        color: #6c757d;
    }

    .why-section {
        margin-top: 200px;
        font-family: 'Poppins', sans-serif;
    }

    .why-section h2 {
        margin-top: 50px;
        font-size: 4rem;
        font-weight: bold;
    }

    .why-section p {
        margin-top: 40px;
        font-size: 1.2rem;
        color: #6c757d;
    }

    .logo img {
        max-width: 750px; 
        width: 100%; 
        height: auto; 
        margin-top: -100px;
    }

    
    .iict-section {
        margin-top: 130px;
        font-family: 'Poppins', sans-serif;
    }

    .iict-section h2 {
        font-size: 2rem;
        font-weight: bold;
        text-align: center; 
    }

    .iict-section p {
        font-size: 1.2rem;
        color: #6c757d;
        text-align: justify;
        margin-top: 40px;
        margin-bottom: 60px;
    }

    
    .iict-title {
        font-size: 2.5rem; 
        font-weight: bold;
        text-align: center;
        color: #333; 
        margin-bottom: 20px; 
    }

    
    .iict-description {
        font-size: 1.9rem;
        color: #6c757d;
        text-align: justify; 
        margin-top: 20px;
        line-height: 1.6; 
    }

    
    .img-gallery-iict {
        width: 100%;
        height: 250px; 
        object-fit: cover; 
        border-radius: 8px; /
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }

    .iict-gallery-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around; 
    }



    .img-gallery-iict:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }


    .btn-primary {
        background-color: #007bff; 
        color: white; 
        border: none; 
        font-size: 16px; 
        padding: 10px 30px; 
        border-radius: 50px; 
        transition: background-color 0.3s ease, transform 0.3s ease; /
        font-family: 'Poppins', sans-serif; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        width: auto; 
        margin-bottom: 30px; 
    }


    .btn-primary:hover {
        background-color: #0056b3; 
        transform: scale(1.05); 
        cursor: pointer; 
    }


    .btn-primary:focus {
        outline: none; 
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5); 
    }

    .modal-body {
        font-family: 'Poppins', sans-serif; 
        color: #333; 
        line-height: 1.8; 
    }


    .modal-title {
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        font-weight: 600; 
        color: #007bff; 
    }


    .modal-body p {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem; 
        color: #6c757d; 
        margin-bottom: 20px; 
    }


    .modal-body img {
        width: 100%; 
        border-radius: 8px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        margin-bottom: 30px; 
    }



</style>

<div class="container">
    <div class="title-section">
        <h1>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h1>
        <h3>Aces Tagum College, Inc.</h3>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsit1.jpg') }}" class="img-fluid img-gallery" alt="Image 1">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsit2.jpg') }}" class="img-fluid img-gallery" alt="Image 2">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsit3.jpg') }}" class="img-fluid img-gallery" alt="Image 3">
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ asset('storage/bsit4.jpg') }}" class="img-fluid img-gallery" alt="Image 4">
        </div>
    </div>

    
    <div class="row why-section">
        <div class="col-md-6">
            <h2>Why BSIT?</h2>
            <p style="text-align: justify;">The <b>Bachelor of Science in Information Technology (BSIT)</b> provides students with the knowledge and skills necessary to thrive in the ever-evolving field of technology. This program emphasizes both theoretical foundations and practical experience, equipping graduates with the expertise needed to solve real-world challenges and pursue a successful career in IT.</p>
        </div>
        <div class="col-md-6">
            <div class="logo">
                <img src="{{ asset('storage/BSIT.jpg') }}" alt="BSIT Logo">
            </div>
        </div>
    </div>
</div>


<div id="row iict-section">
<div class="row iict-section">
    <div class="col-md-12">
        <h2 class="iict-title">Institute of Information and Communication Technology (IICT)</h2>
        <p class="iict-description">The <b>Institute of Information and Communication Technology (IICT)</b> at Aces Tagum College, Inc. serves as a dynamic and cohesive group for all Bachelor of Science in Information Technology (BSIT) students. It is a community that fosters collaboration, innovation, and a shared commitment to academic excellence in the field of information technology. IICT not only provides students with the technical knowledge needed to succeed in the IT industry but also cultivates a sense of unity and teamwork among its members. The institute aims to prepare its students to meet the ever-evolving challenges of the technology sector by offering them opportunities for growth, leadership, and real-world experience, making them well-equipped for their future careers.</p>
    </div>
</div>
</div>

<div class="container">
    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict1.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 1">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict2.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 2">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict3.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 3">
        </div>
    </div>
    
   
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict4.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 4">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict5.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 5">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict6.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 6">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict7.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 7">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict8.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 8">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict9.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 9">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict10.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 10">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict11.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 11">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict12.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 12">
        </div>
    </div>

    
    <div class="row iict-gallery-row">
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict13.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 13">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict14.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 14">
        </div>
        <div class="col-md-4 mb-4">
            <img src="{{ asset('storage/iict15.jpg') }}" class="img-fluid img-gallery-iict" alt="Image 15">
        </div>
    </div>
</div>

<div class="row justify-content-center mt-5">
    <div class="col-md-12 text-center">
       
        <button class="btn btn-primary" 
                style="border-radius: 50px; padding: 10px 30px; font-family: 'Poppins', sans-serif;" 
                data-bs-toggle="modal" 
                data-bs-target="#iictModal">More about our Institute</button>
    </div>
</div>
</div>


<div class="modal fade" id="iictModal" tabindex="-1" aria-labelledby="iictModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iictModalLabel">Institute of Information and Communication Technology (IICT)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>The Institute of Information and Communication Technology (IICT) at Aces Tagum College, Inc. is a leading educational institution focused on providing high-quality education in the fields of information technology, computer science, and digital communications. The institute offers students the opportunity to explore a wide range of technical subjects, including programming, software development, networking, and data management. With a curriculum designed to meet the ever-evolving demands of the technology sector, IICT ensures that its graduates are equipped with the skills and knowledge necessary to succeed in the global job market.</p>

                <p>IICT fosters a dynamic and collaborative learning environment, emphasizing both theoretical foundations and hands-on practical experience. Students engage in real-world projects, internships, and workshops that allow them to apply their classroom learning to solve real-world problems. The institute prides itself on its state-of-the-art facilities, including modern computer labs, networking equipment, and access to industry-standard software tools. This comprehensive learning experience enables students to develop strong technical proficiency, as well as critical thinking and problem-solving skills that are essential in today’s fast-paced technological landscape.</p>

                <p>In addition to its rigorous academic program, IICT also promotes a sense of community and leadership among its students. The institute offers numerous extracurricular activities, including coding competitions, tech clubs, and leadership development programs, which help students enhance their personal and professional growth. By fostering a supportive and collaborative atmosphere, IICT prepares its graduates to take on leadership roles in the IT industry, contributing to the development of innovative solutions and driving technological advancement across various sectors.</p>
            </div>
        </div>
    </div>
</div>








@endsection