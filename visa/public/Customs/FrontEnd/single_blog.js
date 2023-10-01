function blogs()
{
    var id = {!! $id !!}
    fetch("https://dhwayoverseas.com/api/blog/"+id).then((res) => res.json()).then((blogs) => {
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