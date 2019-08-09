// require('./bootstrap');

const projects = {
    redditsm: {
        title: 'Reddit Save Manager',
        body: `
            <h4 class="font-bold text-gray-700">Tech Stack</h4>
            <div class="stack flex flex-wrap bg-white shadow-inner mb-5 py-5 px-2">

            </div>
            <p class="mb-4">Reddit Save Manager is a project I did to get comfortable with the Laravel and Vue.js frameworks. Although it doesn't user vue-router, it has elements of a single page application in that it handles all of its fetching from the database using AJAX calls with axios through the API built with Laravel. There were many challenges with this project, the main one being the uphill battle of learning multiple technologies at the same time. Laravel is very opinionated on how things should be written. Even though I have a few years of experience writing PHP at this point, using Laravel makes you feel like you've started over again. It's exciting to use a framework like this that makes refactoring so clean.</p>
            <h4 class="font-bold text-gray-700">Challenges</h4>
            <p class="mb-4">At this point, challenges make me smile. They make me smile because I have yet to run into a problem I couldn't solve. The confidence that I can overcome any obstacle given enough persistent work is empowering. Sometimes these problems are frustrating beyond belief. Sometimes they make me feel like I'm an idiot. However, I know that if I don't give up, I will eventually get past it.</p>
            <p class="mb-4">With that being said, the first major hurdle I ran into was getting OAuth2 working and connecting to the Reddit API. I'm a little embarrassed at how long I spent on an issue that ended up being a typo in my redirect URI, but everything is a learning experience. In that instance I learned to check the easy solutions before I go down a rabbit hole.</p>
            <p class="mb-4">Another challenge was how to deal with refreshing the user's access token so that they didn't have to continually be redirected. I put a method on the User model to check if the user's token was expired based on the user's <code class="bg-gray-300 rounded px-1">updated_at</code> time, and, if it was expired, it would automatically refresh it before getting the user's saved content.</p>
            <p class="mb-4">I think the other biggest challenge, which still continues, is keeping the codebase clean and manageable. Without paying attention, it's easy to let a function get out of control, but it's imperative for me to make sure I'm constantly going back over what I've written and looking for flags that tell me it's a good place to refactor. I find it difficult to know what the right solution is all the time, and the best developers make this process look easy. It's a complex and challenging process to make complicated solutions look simple and elegant, but I'll continue to strive towards that nevertheless.</p>
        `,
        footer: `
            <a href="https://redditsm.clintgwinter.com" target="_blank" class="px-4 py-2 leading-none text-sm bg-teal-500 hover:bg-teal-600 text-white text-shadow rounded shadow">View</a>
            <a href="https://github.com/ClintWinter/reddit-save-manager" target="_blank" class="px-4 py-2 leading-none text-sm hover:underline text-teal-500">Source</a>
        `,
        stack: ['Vue.js', 'Laravel', 'JavaScript', 'axios', 'MySQL', 'Sass', 'tailwindcss', 'OAuth2', 'Git/Github', 'Socialite']
    }
}

function modal(project) {
    var modalContainer = document.getElementById('modal-container');
    // var modal = document.getElementById('modal');

    document.querySelector('#modal .modal-title').textContent = projects[project].title;

    document.querySelector('#modal .modal-body').innerHTML = projects[project].body;

    projects[project].stack.forEach(item => {
        let tech = document.createElement('div');
        let checkmark = document.createElement('i');
        
        tech.classList.add('w-1/2', 'md:w-1/3', 'px-3', 'mb-2');
        checkmark.classList.add('fas', 'fa-check', 'mr-3', 'text-teal-400', 'text-shadow');

        tech.textContent = item;
        tech.prepend(checkmark);

        document.querySelector('#modal .modal-body .stack').appendChild(tech);
    });

    document.querySelector('#modal .modal-footer').innerHTML = projects[project].footer;
    
    modalContainer.classList.remove('hidden');
    
}

document.querySelector('.btn-details').addEventListener('click', function(event) {
    modal(event.currentTarget.dataset.project);
});