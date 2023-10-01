@extends('Layouts.FrontEnd.app')

@section('content')

{{-- @push('footer_scripts')
<script src="{{asset('Customs/FrontEnd/single_blog.js')}}"></script>
@endpush --}}

<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <div id="image">
                            {{-- <img src="Assets/FrontEnd/images/resource/news-details.jpg" alt=""> --}}
                        </div>
                        <div class="blog-details__date">
                            
                            <span id="day" class="day"></span>
                            <span id="month" class="month"></span>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        {{-- <ul class="list-unstyled blog-details__meta">
                            <li><a href="news-details"><i class="fas fa-user-circle"></i> Admin</a> </li>
                            <li><a href="news-details"><i class="fas fa-comments"></i> 02
                                Comments</a>
                            </li>
                        </ul> --}}
                        <h3 class="blog-details__title" id="title"></h3>
                        <p class="blog-details__text-2" id="content"> </p>
                    </div>
                    {{-- <div class="blog-details__bottom">
                        <p class="blog-details__tags"> <span>Tags</span> <a href="news-details">Immigration</a> <a href="news-details">Visa Consultancy</a> </p>
                        <div class="blog-details__social-list"> <a href="news-details"><i class="fab fa-twitter"></i></a> <a href="news-details"><i class="fab fa-facebook"></i></a> <a href="news-details"><i class="fab fa-pinterest-p"></i></a> <a href="news-details"><i class="fab fa-instagram"></i></a> </div>
                    </div> --}}
                    {{-- <div class="nav-links">
                        <div class="prev">
                            <a href="news-details" rel="prev">True factors of the modern healthy lifestyle</a>
                        </div>
                        <div class="next">
                            <a href="news-details" rel="next">How to lead a healthy &amp; well-balanced life</a>
                        </div>
                    </div> --}}
                    <div class="comment-one">
                        <h3 class="comment-one__title">2 Comments</h3>
                        <div class="comment-one__single">
                            <div class="comment-one__image"> <img src="{{asset('Assets/FrontEnd/images/resource/testimonial-4.jpg')}}" alt=""> </div>
                            <div class="comment-one__content">
                                <h3>Kevin Martin</h3>
                                <p>DHWAY Overseas has helped me a lot in getting my dream come true and study in france
                                </p>
                                {{-- <a href="news-details" class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></a> --}}
                            </div>
                        </div>
                        <div class="comment-one__single">
                            <div class="comment-one__image"> <img src="{{asset('Assets/FrontEnd/images/resource/testimonial-5.jpg')}}" alt=""> </div>
                            <div class="comment-one__content">
                                <h3>Sarah Albert</h3>
                                <p>DHWAY Overseas has helped me to start a business in a france and grow my business alot
                                </p>
                                {{-- <a href="news-details" class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></a> --}}
                            </div>
                        </div>
                        <div class="comment-form">
                            <h3 class="comment-form__title">Leave a Comment</h3>
                            <form id="contact_form" name="contact_form" class="" action="" method="get">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    {{-- <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="lnr-icon-search"></i></button>
                        </form>
                    </div> --}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <li>
                                <div class="sidebar__post-image"> <img src="{{asset('Assets/FrontEnd/images/resource/news-1.jpg')}}" alt=""> </div>
                                <div class="sidebar__post-content">
                                    <h3> <span class="sidebar__post-content-meta"><i
                                        class="fas fa-user-circle"></i>Sarah</span> <a href="/blog-details">Top universities in France</a>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image"> <img src="{{asset('Assets/FrontEnd/images/resource/news-2.jpg')}}" alt=""> </div>
                                <div class="sidebar__post-content">
                                    <h3> <span class="sidebar__post-content-meta"><i
                                        class="fas fa-user-circle"></i>Gilbert</span> <a href="/blog-details">Necessity may give us best virtual court</a> </h3>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__post-image"> <img src="{{asset('Assets/FrontEnd/images/resource/news-3.jpg')}}" alt=""> </div>
                                <div class="sidebar__post-content">
                                    <h3> <span class="sidebar__post-content-meta"><i
                                        class="fas fa-user-circle"></i>Dyanmo</span> <a href="/blog-details">You should know about business plan</a> </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="news-details">Abroad Study<span
                                class="icon-right-arrow"></span></a> </li>
                            <li class="active"><a href="news-details">Green card<span
                                class="icon-right-arrow"></span></a></li>
                            <li><a href="news-details">PR Applicants<span
                                class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details">Travel Insurance<span
                                class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details">Visa Consultancy<span
                                class="icon-right-arrow"></span></a> </li>
                            <li><a href="news-details">Work Permits<span
                                class="icon-right-arrow"></span></a> </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list"> <a href="#">Education</a> <a href="#">Visa</a> <a href="#">Immigration</a> <a href="#">Digital</a> <a href="#">Travel</a> <a href="#">Language</a> </div>
                    </div> --}}
                    {{-- <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">Recent Comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter on <br>
                                        launch new mobile app
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on template:</p>
                                    <h5>comments</h5>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p>A wordpress commenter on <br>
                                        launch new mobile app
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                                <div class="sidebar__comments-text-box">
                                    <p> <span>John Doe</span> on template:</p>
                                    <h5>comments</h5>
                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function blogs()
{
    var id = {!! $id !!}
    fetch("http://localhost:8000/api/blog/"+id).then((res) => res.json()).then((blogs) => {
        // console.log(blogs);

        blogs_details = ""
        image = ""
        title = ""
        content = ""

        blogs.forEach(blog=>{
            const date = new Date(blog.created_at);
const day = date.getDate();
const month = date.toLocaleString('default', { month: 'long' }); 
const year = date.getFullYear();

const text = blog.content.split(' ').slice(0, 20).join(' ');
const truncatedText = blog.content.length > text.length ? text + '...' : text;

            // blogs_details +=
            // `<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
            // 		<div class="inner-box">
            // 			<div class="image-box">
            // 				<figure class="image"><a href="/blog/${blog.id}"><img src="/storage/${blog.image}" alt=""></a></figure>
            // 				<span class="date">${day} <span class="month">${month}</span></span>
            // 			</div>
            // 			<div class="lower-content">
            // 				<h4 class="title"><a href="/blog">${blog.title}</a></h4>
            // 				<div class="text">${truncatedText}</div>
            // 			</div>
            // 		</div>
            // 	</div>`
                image += `<img src="/storage/${blog.image}" alt="">`
                title += `${blog.title}`
                content += `${blog.content}`
                // document.getElementById("blogs").innerHTML = blogs_details
                document.getElementById("image").innerHTML = image
                document.getElementById("day").innerHTML = day
                document.getElementById("month").innerHTML = month
                document.getElementById("title").innerHTML = title
                document.getElementById("content").innerHTML = content
        });

    });
}

blogs();
</script>

@endsection