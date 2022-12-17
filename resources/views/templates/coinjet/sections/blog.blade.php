@php
    $blogCaption = getContent('blog.content',true);
    $blogs = getContent('blog.element',false,3);
@endphp

<section class="flat-news" id="blog">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="top-title center">
                  <h2>{{__($blogCaption->data_values->heading)}}</h2>
                  <p>{{__($blogCaption->data_values->subheading)}}</p>
              </div>
          </div>
      </div><!-- /.row -->
      <div class="row">
        @foreach($blogs as $blog)
          <div class="col-md-4">
              <article class="main-post news three-column">
                  <div class="featured-post">
                      <a href="{{ route('blogDetail',$blog->id) }}" title="">
                          <img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->image) }}" alt="" />
                      </a>
                  </div><!-- /.featured-post -->
                  <div class="entry-content">
                      <h2>
                          <a href="{{ route('blogDetail',$blog->id) }}" title="">{{ __($blog->data_values->title) }}</a>
                      </h2>
                      <ul class="meta-left">
                          <li class="post-date">
                              <i class="fa fa-calendar"></i> 12 Feb 2018
                          </li>
                          <li class="post-view">
                              <i class="fa fa-eye"></i> 55
                          </li>
                          <li class="post-comment">
                              <i class="fa fa-comment"></i> 12
                          </li>
                      </ul>
                      <p>
                        {{ strLimit(strip_tags($blog->data_values->description),80) }}...
                      </p>
                  </div><!-- /.entry-content -->
              </article><!-- /.main-post -->
          </div><!-- .col-md-4 -->
          @endforeach
      </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.flat-news -->
