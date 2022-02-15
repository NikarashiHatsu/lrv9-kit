# Laravel 9 Starter Kit

This is a starter kit for a new Laravel project. The project is already
provided with the basic Laravel Breeze authentication. The whole project is
basically a TALL-stack starter kit.

The package includes:
- TailwindCSS w/ DaisyUI (you can remove DaisyUI if you prefer to use plain TailwindCSS)
- AlpineJS
- ChartJS
- Simplelightbox
- Sweetalert2

## Getting started
- Clone this project.
- Run `composer install`.
- Run `npm install`.
- Run `npm run dev` or `npm run watch` to compile assets.

## Additional features
No symlinks in shared hosting? No problem, we covered you with the `APP_HOSTING_DIRECTORY`
environment variable. How to use:
1. Change the `FILESYSTEM_DISK` in `.env` to `hosting`.
2. Set the `APP_HOSTING_DIRECTORY` to the directory relative from upload path to something like `../../public_html/project_folder`.
3. Make a `storage` folder in the hosting directory.
4. Filesystem issue is fixed.