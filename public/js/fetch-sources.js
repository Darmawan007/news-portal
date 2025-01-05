$(document).ready(function () {
    const sourceContents = sources.map(
        (source) => `
    <div class=" md:mr-4 mb-4 mx-auto">
    <div>
        <div class="shadow-md flex items-center h-28 w-28 overflow-hidden">
            <a href="./source?source=${source.name}">
                <img src="${source.image}" alt="" class="w-full object-contain" />
            </a>
        </div>
    </div>
    </div> 
    `
    );

    $("#source-list").html(sourceContents.join(""));
});
