<?php include 'Modules/header.php';?>
<link rel="stylesheet" href="assets/css/corporate.css">

<style>
.training-programs {
  background:#ffedc5;
  padding: 40px 0;
 
}

.training-programs h2 {
  font-size: 32px;
  text-align: center;
  margin-bottom: 40px;
  color: #333;
  font-family: Arial, sans-serif;
}

.program {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 30px;
  margin-bottom: 30px;
}

.program h3 {
  font-size: 24px;
  color: #555;
  margin-bottom: 20px;
  font-family: Arial, sans-serif;
}

.program ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.program ul li {
  margin-bottom: 10px;
}

.program h4 {
  font-size: 20px;
  color: #333;
  margin-bottom: 10px;
  font-family: Arial, sans-serif;
}

.program ul ul {
  margin-left: 20px;
  margin-top: 10px;
}

.program ul ul li {
  margin-bottom: 5px;
  font-family: Arial, sans-serif;
}

</style>
  <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/21.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Page</a></li>
                        <li class="active">Corporate Training</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
  <!-- Training Programs Section -->
  <section class="training-programs">
    <h2>Our Training Programs</h2>
    <div class="program">
      <h3>Front-End Web Development</h3>
      <ul>
        <li>
          <h4>HTML</h4>
          <ul>
            <li>Structure and semantics of HTML</li>
            <li>Tags, attributes, and elements</li>
            <li>Working with forms and input validation</li>
          </ul>
        </li>
        <li>
          <h4>HTML5</h4>
          <ul>
            <li>New features and elements in HTML5</li>
            <li>Canvas and SVG graphics</li>
            <li>Audio and video integration</li>
          </ul>
        </li>
        <li>
          <h4>CSS3</h4>
          <ul>
            <li>CSS selectors, properties, and values</li>
            <li>Responsive web design and media queries</li>
            <li>Animations and transitions</li>
          </ul>
        </li>
        <li>
          <h4>JavaScript</h4>
          <ul>
            <li>Core concepts of JavaScript</li>
            <li>DOM manipulation and event handling</li>
            <li>AJAX and JSON</li>
          </ul>
        </li>
        <li>
          <h4>jQuery</h4>
          <ul>
            <li>jQuery library and its features</li>
            <li>Selectors and DOM manipulation with jQuery</li>
            <li>Handling events and animations</li>
          </ul>
        </li>
        <li>
          <h4>React JS</h4>
          <ul>
            <li>Introduction to React and component-based architecture</li>
            <li>Building user interfaces with React</li>
            <li>State management and component lifecycle</li>
          </ul>
        </li>
        <li>
          <h4>Bootstrap</h4>
          <ul>
            <li>Bootstrap grid system and responsive layout</li>
            <li>Typography and CSS components</li>
            <li>Customizing and extending Bootstrap</li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="program">
      <h3>Back-End Web Development with Java</h3>
      <ul>
        <li>
          <h4>Core Java</h4>
          <ul>
            <li>Java syntax, variables, and control flow</li>
            <li>Object-oriented programming principles</li>
            <li>Exception handling and file I/O</li>
          </ul>
        </li>
        <li>
          <h4>Advanced Java with Servlet</h4>
          <ul>
            <li>Servlets and JavaServer Pages (JSP)</li>
            <li>Handling HTTP requests and responses</li>
            <li>Session management and filters</li>
          </ul>
        </li>
        <li>
          <h4>Spring Framework</h4>
          <ul>
            <li>Dependency Injection (DI) and Inversion of Control (IoC)</li>
            <li>Spring MVC and RESTful web services</li>
            <li>Database integration with Spring JDBC</li>
          </ul>
        </li>
        <li>
          <h4>Spring Boot</h4>
          <ul>
            <li>Introduction to Spring Boot and its features</li>
            <li>Creating standalone Spring Boot applications</li>
            <li>Spring Boot and Spring Data JPA integration</li>
          </ul>
        </li>
        <li>
          <h4>Restful Web Services</h4>
          <ul>
            <li>REST architecture and principles</li>
            <li>Creating RESTful APIs with Java</li>
            <li>Authentication and security in RESTful services</li>
          </ul>
        </li>
        <li>
          <h4>JPA Hibernate</h4>
          <ul>
            <li>Object-relational mapping (ORM) with Hibernate</li>
            <li>Persisting and querying data with JPA</li>
            <li>Transaction management and caching</li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial">
      <blockquote>"Riyality Software Services provided us with an exceptional corporate training experience. Their trainers were knowledgeable, engaging, and tailored the program to our specific needs. Our team now possesses the skills required to excel in a fast-paced, technology-driven environment."</blockquote>
      <cite>- John Smith, CEO of ABC Corporation</cite>
    </div>
    <div class="testimonial">
      <blockquote>"The training program offered by Riyality Software Services was instrumental in transforming our software development processes. The trainers were experienced professionals who provided practical insights and real-world examples. We highly recommend their corporate training services."</blockquote>
      <cite>- Jane Doe, CTO of XYZ Company</cite>
    </div>
  </section>

  <script src="assets/js/corporate.js"></script>

  <?php include 'Modules/footer.php';?>