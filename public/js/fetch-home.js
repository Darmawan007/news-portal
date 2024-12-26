moment.locale('id');
const pushContent = (newestPosts) => {
    let i = 0;
    $('#post-carousel .swiper-slide').each(function () { 
        const content = `
        <div class="w-full shadow-md relative">
            <a target="_blank" href="${newestPosts[i]?.link}">
                <img src="${newestPosts[i]?.thumbnail}" alt="" class="md:h-96 h-64 w-full object-cover font-semibold brightness-50" />
            </a>
            <div class="absolute inset-x-0 bottom-0 md:p-4 p-3 bg-gradient-to-r from-blue-800 flex flex-col">
                <span class="text-white md:text-2xl text-base line-clamp-2">${newestPosts[i]?.title}</span>
                <span class="text-gray-200 md:text-sm text-[11px] mt-2 line-clamp-2">${newestPosts[i]?.description}</span>
            </div>
            <div class="absolute top-0 left-0 md:p-4 p-3 flex items-center md:gap-x-4 gap-x-3">
                <div>
                    <div class="md:w-10 md:h-10 w-8 h-8 rounded-full bg-white">
                        <img src="${newestPosts[i]?.source?.image}" alt="" class="md:w-10 md:h-10 w-8 h-8 rounded-full object-contain" />
                    </div>
                </div>
                <div>
                    <div class="text-white md:text-base text-sm line-clamp-1">${newestPosts[i]?.source?.title}</div>
                    <div class="text-white md:text-xs text-[11px]">${moment(newestPosts[i]?.pubDate).fromNow()}</div>
                </div>
            </div>
        </div>`;
        i++;

        $(this).html(content);
    });

    const postSide = [0,1,2,3].map(() => {
        const content = `
        <div class="w-full shadow-md relative">
            <a target="_blank" href="${newestPosts[i]?.link}">
                <img src="${newestPosts[i]?.thumbnail}" alt="" class="md:h-[184px] h-60 w-full object-cover font-semibold brightness-50" />
            </a>
            <div class="absolute inset-x-0 bottom-0 md:p-2 p-3 bg-gradient-to-r from-blue-800 flex flex-col">
                <span class="text-white md:text-base text-base line-clamp-2">${newestPosts[i]?.title}</span>
                <span class="text-gray-200 md:text-sm text-[11px] mt-2 line-clamp-2 md:hidden block">${newestPosts[i]?.description}</span>
            </div>
            <div class="absolute top-0 left-0 md:p-2 p-3 flex items-center md:gap-x-2 gap-x-3">
                <div>
                    <div class="w-8 h-8 rounded-full bg-white">
                        <img src="${newestPosts[i]?.source?.image}" alt="" class="w-8 h-8 rounded-full object-contain" />
                    </div>
                </div>
                <div>
                    <div class="text-white text-sm line-clamp-1">${newestPosts[i]?.source?.title}</div>
                    <div class="text-white text-[11px]">${moment(newestPosts[i]?.pubDate).fromNow()}</div>
                </div>
            </div>
        </div>`;

        i++;

        return content;
    });
    $('#post-side').html(postSide.join(''));
    
    const otherPosts = newestPosts.slice(i, i + 20).map((newestPost) => `
    <a target="_blank" href="${newestPost?.link}">
        <div class="flex gap-x-4 relative">
            <div>
                <div class="h-[72px] w-32 md:w-40 md:h-24">
                    <img src="${newestPost?.thumbnail}" alt="" class="h-full w-full object-cover" />
                </div>
            </div>
            <div>
                <div class="md:text-base text-sm line-clamp-2 font-semibold -mt-1 hover:text-blue-700">${newestPost?.title}</div>
                <div class="md:text-xs text-[10px] line-clamp-2 text-gray-400">${moment(newestPost.pubDate).fromNow()}</div>
                <div class="md:text-xs text-[10px] md:line-clamp-2 line-clamp-1 md:mt-1 mt-0.5 ">${newestPost?.description}</div>
            </div>
            <div class="absolute md:top-6 md:left-14 top-3 left-9 flex items-center justify-center md:gap-x-2 gap-x-3">
                <div>
                    <div class="w-12 h-12 rounded-full bg-white shadow-lg">
                        <img src="${newestPost?.source?.image}" alt="" class="w-12 h-12 rounded-full object-contain" />
                    </div>
                </div>
            </div>
        </div>
    </a>`);
    $('#post-other').html(otherPosts.join(''));
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

const mergeArray = (...array) => {
    const max = Math.max(...array.map((arr) => arr?.length || 0));

    return [...new Array(max).fill(0)].flatMap((_, i) => array.map((arr) => arr[i]).filter(v => v))
}

async function fetchData() {
    const antaraPosts = await new Promise((resolve) => {
        $.ajax({
            url: "https://api-berita-indonesia.vercel.app/antara/terbaru",
            success: function(result) {
                resolve(result.data || {})
            }
        });
    });
    const cnbcPosts = await new Promise((resolve) => {
        $.ajax({
            url: "https://api-berita-indonesia.vercel.app/cnbc/terbaru",
            success: function(result) {
                resolve(result.data || {})
            }
        });
    });
    const cnnPosts = await new Promise((resolve) => {
        $.ajax({
            url: "https://api-berita-indonesia.vercel.app/cnn/terbaru",
            success: function(result) {
                resolve(result.data || {})
            }
        });
    });

    pushContent(mergeArray(
        transformPost(cnnPosts),
        transformPost(antaraPosts),
        transformPost(cnbcPosts),
    ))
} 

$(document).ready(function () {
    $('#source-carousel .swiper-slide').each(function (i) { 
        const content = `
        <div class="shadow-md md:h-28 h-20 md:w-28 w-20 rounded-full overflow-hidden flex items-center">
            <a href="./by-source.html?source=${sources[i]?.name}">
                <img src="${sources[i]?.image}" alt="" class="w-full object-contain" />
            </a>
        </div>`;
        $(this).html(content);
    });
    fetchData();
});




