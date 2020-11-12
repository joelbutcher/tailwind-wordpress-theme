<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
      <div class="max-w-md mx-auto">
        <div>
          <div class="h-7 sm:h-8">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171 21">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.414.441c-4.377 0-7.113 2.189-8.207 6.566 1.642-2.188 3.556-3.01 5.745-2.462 1.249.312 2.141 1.218 3.13 2.22 1.608 1.634 3.471 3.525 7.54 3.525 4.376 0 7.112-2.189 8.206-6.566-1.641 2.189-3.556 3.01-5.745 2.462-1.248-.312-2.14-1.218-3.129-2.22C22.345 2.332 20.482.44 16.414.44zM8.207 10.29c-4.377 0-7.113 2.189-8.207 6.566 1.641-2.189 3.556-3.01 5.745-2.463 1.249.313 2.141 1.218 3.13 2.221 1.608 1.634 3.471 3.524 7.54 3.524 4.376 0 7.112-2.188 8.206-6.565-1.641 2.188-3.556 3.009-5.745 2.462-1.248-.312-2.14-1.218-3.129-2.22-1.61-1.634-3.472-3.525-7.54-3.525z" fill="#16BDCA"/>
              <path d="M50.135 7.576v-2.36h-2.812V2.042l-2.45.726v2.45h-2.086v2.359h2.086v5.443c0 2.949 1.497 3.992 5.262 3.538v-2.2c-1.86.091-2.812.114-2.812-1.338V7.576h2.812zM60.874 5.217v1.61c-.862-1.18-2.2-1.905-3.97-1.905-3.084 0-5.647 2.586-5.647 5.965 0 3.357 2.563 5.965 5.648 5.965 1.769 0 3.107-.726 3.969-1.928v1.633h2.45V5.217h-2.45zm-3.584 9.3c-2.041 0-3.584-1.52-3.584-3.63s1.543-3.629 3.584-3.629c2.041 0 3.584 1.52 3.584 3.63 0 2.108-1.543 3.628-3.584 3.628zM67.403 3.516c.862 0 1.565-.726 1.565-1.565 0-.862-.703-1.565-1.565-1.565s-1.565.703-1.565 1.565c0 .839.704 1.565 1.565 1.565zM66.18 16.557h2.45V5.217h-2.45v11.34zM71.472 16.557h2.45V0h-2.45v16.557zM89.83 5.217l-2.222 7.825-2.359-7.825h-2.336l-2.382 7.825-2.2-7.825h-2.585l3.56 11.34h2.405l2.381-7.643 2.36 7.643h2.403l3.561-11.34h-2.585zM95.445 3.516c.862 0 1.565-.726 1.565-1.565 0-.862-.703-1.565-1.565-1.565s-1.565.703-1.565 1.565c0 .839.703 1.565 1.565 1.565zM94.22 16.557h2.45V5.217h-2.45v11.34zM105.479 4.922c-1.542 0-2.767.567-3.515 1.746V5.217h-2.45v11.34h2.45V10.48c0-2.314 1.27-3.266 2.88-3.266 1.543 0 2.541.907 2.541 2.63v6.714h2.449V9.594c0-2.948-1.814-4.672-4.355-4.672zM121.454.68v6.147c-.862-1.18-2.2-1.905-3.97-1.905-3.084 0-5.647 2.586-5.647 5.965 0 3.357 2.563 5.965 5.647 5.965 1.77 0 3.108-.726 3.97-1.928v1.633h2.449V.68h-2.449zm-3.584 13.836c-2.041 0-3.584-1.52-3.584-3.629 0-2.11 1.543-3.629 3.584-3.629 2.041 0 3.584 1.52 3.584 3.63 0 2.108-1.543 3.628-3.584 3.628z" fill="#000"/>
            </svg>
          </div>
        </div>
        <div class="divide-y divide-gray-200">
          <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
            <p>Build beautiful websites using Tailwind CSS in WordPress</p>
            <ul class="list-disc space-y-2">
              <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-teal-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">
                  Customizing your
                  <code class="text-sm font-bold text-gray-900">tailwind.config.js</code> file
                </p>
              </li>
              <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-teal-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">
                  Extracting classes with
                  <code class="text-sm font-bold text-gray-900">@apply</code>
                </p>
              </li>
              <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-teal-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                <p class="ml-2">Code completion with instant preview</p>
              </li>
            </ul>
            <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share online.</p>
          </div>
          <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
            <p>Want to dig deeper into Tailwind?</p>
            <p>
              <a href="https://tailwindcss.com" class="text-teal-600 hover:text-teal-700"> Read the docs &rarr; </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>