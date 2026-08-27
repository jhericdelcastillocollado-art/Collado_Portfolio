<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $personal = [
        'name' => 'Jheric Joshua D. Collado',
        'title' => 'Full-Stack Developer & UI Designer',
        'intro' => 'I craft elegant digital experiences with clean code and thoughtful design. Passionate about building products that make a difference.',
        'email' => 'jhericdelcastillo@gmail.com',
        'phone' => '0192533468',
        'location' => 'Zone 1 Bangued,Abra',
        'github' => 'https://jhericdelcastillocollado-art/jhericdelcastillocollado-art.github.io',
        'linkedin' => 'https://linkedin.com/in/alexmorgan',
        'twitter' => 'https://twitter.com/alexmorgan',
        'dribbble' => 'https://dribbble.com/alexmorgan',
    ];

    $skills = [
        'PHP', 'Laravel', 'JavaScript', 'TypeScript', 'React', 'Vue.js',
        'Node.js', 'HTML5', 'CSS3', 'Tailwind CSS', 'MySQL', 'PostgreSQL',
        'Git', 'Docker', 'AWS', 'Figma',
    ];

    $education = [
        [
            'institution' => 'DATA CENTER COLLEGE OF THE PHILIPPINES',
            'degree' => 'Bachelor of Science in Information Technology',
            'field' => '',
            'start' => '2023',
            'end' => '2026',
            'description' => 'Focused on software engineering, algorithms, and human-computer interaction. ',
            
        ],
        [
            'institution' => 'DIVINE WORLD COLLEGE OF BANGUED',
            'degree' => 'HUMANITIES AND SOCIAL SCIENCE',
            'field' => '',
            'start' => '2020',
            'end' => '2022',
            'description' => 'Analyzes society ,politics ,economics, and human psychology using scientific methods.',
            'achievements' => [],
        ],
    ];

    $projects = [
        [
            'title' => 'Patient Record Management System',
            'description' => 'The image shows a Patient Record Management System login interface developed using Microsoft Visual Basic (VB.NET). The system provides a simple and user-friendly platform for authorized healthcare personnel to access and manage patient information securely. The login form includes fields for the username and password, a Forgot Password option, and a Login button for authentication. The interface also displays the RHU Peñarrubia Rural Health Unit logo, facility information, and operating details. With its clean layout and teal-and-white color scheme, the system is designed to provide an organized, professional, and efficient way of accessing patient records and healthcare-related information.',
            'technologies' => ['Microsoft Visual Studio 2010 '],
            'image' => '/assets/images/a3.jpg',
            'github' => '#',
            'demo' => '#',
            'category' => 'Web App',
        ],
    ];

    return view('home', compact('personal', 'skills', 'education', 'projects'));
});
