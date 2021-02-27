// module.exports = function () {

//     function init() {
//         const sections = [
//             {
//                 "name": "Google",
//                 "links": [
//                     {
//                         "title": "Maps",
//                         "link": "https://maps.google.com",
//                         "icon": "fas fa-map-pin"
//                     },
//                     {
//                         "title": "Gmail",
//                         "link": "https://mail.google.com",
//                         "icon": "fas fa-envelope-square"
//                     },
//                     {
//                         "title": "Docs",
//                         "link": "https://docs.google.com",
//                         "icon": "fas fa-file"
//                     },
//                     {
//                         "title": "Drive",
//                         "link": "https://drive.google.com",
//                         "icon": "fab fa-google-drive"
//                     }
//                 ]
//             },
//             {
//                 "name": "Entertainment",
//                 "links": [
//                     {
//                         "title": "Youtube",
//                         "link": "https://youtube.com",
//                         "icon": "fab fa-youtube"
//                     },
//                     {
//                         "title": "Twitch",
//                         "link": "https://twitch.tv",
//                         "icon": "fab fa-twitch"
//                     }
//                 ]
//             },
//             {
//                 "name": "Social",
//                 "links": [
//                     {
//                         "title": "LinkedIn",
//                         "link": "https://linkedin.com",
//                         "icon": "fab fa-linkedin"
//                     },
//                     {
//                         "title": "Reddit",
//                         "link": "https://reddit.com",
//                         "icon": "fab fa-reddit"
//                     }
//                 ]
//             },
//             {
//                 "name": "Finances",
//                 "links": [
//                     {
//                         "title": "TD Bank",
//                         "link": "https://onlinebanking.tdbank.com/#/authentication/login",
//                         "icon": "fas fa-money-check-alt"
//                     },
//                     {
//                         "title": "Retirement",
//                         "link": "https://www.go-retire.com/login",
//                         "icon": "fas fa-piggy-bank"
//                     },
//                     {
//                         "title": "Vanguard",
//                         "link": "https://investor.vanguard.com/my-account/log-on",
//                         "icon": "fas fa-chart-line"
//                     },
//                     {
//                         "title": "Credit Card",
//                         "link": "https://www.tdcardservices.com/CCServicing/Login.do?promoCode=default",
//                         "icon": "fas fa-credit-card"
//                     }
//                 ]
//             },
//             {
//                 "name": "Development",
//                 "links": [
//                     {
//                         "title": "Github",
//                         "link": "https://github.com",
//                         "icon": "fab fa-github"
//                     },
//                     {
//                         "title": "Laracasts",
//                         "link": "https://laracasts.com",
//                         "icon": "fas fa-space-shuttle"
//                     },
//                     // {
//                     //     "title": "Code Wars",
//                     //     "link": "https://codewars.com/dashboard",
//                     //     "icon": "fas fa-code"
//                     // },
//                     {
//                         "title": "Digital Ocean",
//                         "link": "https://cloud.digitalocean.com/projects",
//                         "icon": "fab fa-digital-ocean"
//                     }
//                 ]
//             }
//         ];

//         const $section = $('section.links');

//         sections.forEach((section, index) => {

//             let $card = $('<section></section>');
//             $card.addClass('card m-2 m-lg-3 py-3 px-5 flex-grow-1');

//             let $title = $('<h2></h2>');
//             $title.text(section.name);

//             let $ul = $('<ul></ul>');

//             $card.prepend($title, $ul);


//             // let card = `<section class="card"><h2>${section.name}</h2><ul>`;
//             section.links.forEach((link, index) => {
//                 // card += `<li><a href="${link.link}"><i class="${link.icon}"></i> <span>${link.title}</span></a></li>`;
//                 let $li = $('<li></li>');

//                 let $a = $('<a></a>');
//                 $a.prop('href', link.link);

//                 let $i = $('<i></i>');
//                 $i.addClass(link.icon);

//                 let $span = $('<span></span>');
//                 $span.text(link.title);

//                 $a.prepend($i, $span);
//                 $li.prepend($a);
//                 $ul.append($li);
//             });
//             // card += `</ul></section>`;

//             $section.append($card);
//         });
//     }

//     $(function () {
//         init();
//     });
// };
