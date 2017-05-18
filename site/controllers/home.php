<?php

/**
 * This is the controller for the home view.
 *
 * @param Site $site
 * @param Collection $pages
 * @param Page $page
 *
 * @since May 16 2017
 */
return function($site, $pages, $page) {
    // Get all the projects
    $projects = $page->children()->visible()->flip();

    // Return posts and pagination
    return compact('projects');
};
