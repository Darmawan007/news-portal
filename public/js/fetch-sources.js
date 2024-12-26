$(document).ready(function () {
    const sourceContents = sources.map(source => `
    <div class="inline-block md:mr-4 mb-4 mx-auto">
        <div class="shadow-md h-28 w-28 overflow-hidden rounded-full">
            <a href="./by-source.html?source=${source.name}">
                <img src="${source.image}" alt="" class="h-28 w-28 object-contain object-center" />
            </a>
        </div>
    </div> 
    `)

    $('#source-list').html(sourceContents.join(''));
});




