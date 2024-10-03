<!DOCTYPE html>
<html lang="en">
@include('header') // Include header


<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Tendy Developer Favorite Quote</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Quote</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8 entries">
            <article class="entry">
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div id="contact" class="contact">
          <div class="col-lg-10">
            <form action="{{ url('quote/post/save')}}" method="post" role="form" class="">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="status" class="form-control" name="status" id="status" placeholder="Status" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="desc" class="form-control" name="desc" id="desc" placeholder="Description" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="quote" rows="5" placeholder="Quote" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          </div>
        </div>
            </article>
        

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ url('/assets/img/blog/blog-recent-1.jpg')}}" alt="">
                <h4><a href="{{ url('/single') }}">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="{{ url('/assets/img/blog/blog-recent-2.jpg')}}" alt="">
                <h4><a href="{{ url('/single') }}">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="{{ url('/assets/img/blog/blog-recent-3.jpg')}}" alt="">
                <h4><a href="{{ url('/single') }}">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="{{ url('/assets/img/blog/blog-recent-4.jpg')}}" alt="">
                <h4><a href="{{ url('/single') }}">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="{{ url('/assets/img/blog/blog-recent-5.jpg')}}" alt="">
                <h4><a href="{{ url('/single') }}">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

@include('footer') // Include footer

</html>