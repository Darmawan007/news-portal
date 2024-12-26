moment.locale('id');
const pushContent = (posts, source, category) => {
    const firstPost = posts[0];

    const categories = source.paths.map(path => `
    <button type="button" class="py-0.5 px-3 md:mr-2 md:mb-2 mr-1 mb-1 md:text-sm text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 ${path.name === category.name ? "bg-gray-100 ring-4 ring-gray-200" : ""}" onClick="fetchData('${path.name}')">${path.name}</button>
    `);

    const sourceHeader = `
    <div class="md:flex gap-x-4">
        <div>
            <div class="md:w-32 md:h-32 w-20 h-20 flex items-center border">
                <img class="w-full object-contain" src="${source.image}" />
            </div>
        </div>
        <div class="md:mt-0 mt-2">
            <div class="md:text-2xl text-base font-semibold">${source?.title}</div>
            <div class="mt-2">
            ${categories.join('')}
            </div>
            
        </div>
    </div>
    <div class="md:py-4 pt-2 pb-4 md:mt-2" id="category">
        <div class="md:text-xl text-base font-semibold">Deskripsi</div>
        <div class="mt-2 md:text-base text-xs">${firstPost.source?.description}</div>
    </div>
    `;
    $('#source-header').html(sourceHeader);
    $('#breadcrumb-title').text(source?.title);

    const postComponents = posts.map((post) => `
    <a target="_blank" href="${post?.link}">
        <div class="flex gap-x-4 relative">
            <div>
                <div class="h-[72px] w-32 md:w-40 md:h-24">
                    <img src="${post?.thumbnail}" alt="" class="h-full w-full object-cover" />
                </div>
            </div>
            <div>
                <div class="md:text-base text-sm line-clamp-2 font-semibold -mt-1 hover:text-blue-700">${post?.title}</div>
                <div class="md:text-xs text-[10px] line-clamp-2 text-gray-400">${moment(post.pubDate).fromNow()}</div>
                <div class="md:text-xs text-[10px] md:line-clamp-2 line-clamp-1 md:mt-1 mt-0.5 ">${post?.description}</div>
            </div>
        </div>
    </a>`);
    $('#post-related').html(postComponents.join(''));
}

const transformPost = (data) => {
    return data.posts?.map(post => {
        return {
            ...post,
            source: {
                title: data.title,
                link: data.link,
                description: data.description,
                image: data.image,
            }
        }
    })
}

const fetchData = (category) => {
    const params = new URLSearchParams(window.location.search);
    const source = params.get('source');
    const currentSource = sources.find(s => s.name === source) || sources[0];
    const currentCategory = currentSource.paths.find(p => p.name === category) || currentSource.paths[0];

    const postSide = [...new Array(10).fill(0)].map(() => {
        return `
        <div class="flex gap-x-4 relative animate-pulse">
            <div>
                <div class="h-[72px] w-32 md:w-40 md:h-24 bg-gray-100"></div>
            </div>
            <div class="w-full">
                <div class="w-full h-6 bg-gray-100"></div>
                <div class="w-14 md:w-24 h-2 bg-gray-100 mt-1"></div>
                <div class="w-full h-8 bg-gray-100 md:mt-2 mt-0.5"></div>
            </div>
        </div>`;
    });
    $('#post-related').html(postSide.join(''));
    
     $.ajax({
        url: `https://api-berita-indonesia.vercel.app/${currentSource.name}/${currentCategory.name}`,
        success: function(result) {
            pushContent(transformPost(result.data || {}), currentSource, currentCategory)
        }
    });
}

$(document).ready(function () {
    fetchData();
    
});




