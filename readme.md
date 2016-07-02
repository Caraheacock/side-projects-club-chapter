# Side Projects Club Chapter Theme

These instructions assume that you are already familiar with how to use the WordPress admin interface. If you need additional help or are unfamiliar with WordPress, ask Cara for help!

---

### Installation and Setup

1. Clone the contents of this repository.
2. Make sure to also pull the 'puzzle_pieces' submodule contents once you've cloned this repo.
3. Upload this repository as a folder in your themes folder. You do NOT need to upload:
  - the `assets/scss` folder
  - the `.git` hidden file
  - the `.gitignore` hidden file
  - this `readme.md`
4. Within the WordPress admin interface, go to Appearance > Themes and activate the "Side Projects Club Chapter" theme.

---

### Creating Pages

You can create simple pages, or if you would like to break your page into sections, select "Page Builder" from the templates dropdown.

The page builder template will allow you to add and arrange different types of sections. The sections currently available are:

- One Column
- Two Column
- Accordions

You can set the headline, background color, the amount of space on the top and bottom, etc. for sections. You can also reorder sections by dragging and dropping, collapse them by clicking the chevron in the upper left of a section, or delete them by clicking the X in the upper right.

For two column sections, there are additional options for setting the widths of the columns: either half and half, one third and two thirds, or two thirds and one third.

The accordions section allows you to add as many accordions as you'd like, each one with a headline and content. Currently accordions are used for FAQs, but if it makes sense to organize other information in accordions, feel free to do so!

---

### Settings to Customize

#### Theme Options

You can edit the header and social media links in Appearance > Customize.

The Header settings allow you to set your chapter name (e.g. Omaha, Nebraska), the background color of the header, and the background image. You can also choose whether to use the full color Side Projects Club logo or the white version of the logo, whichever looks better on your background color/image.

The Social Media settings allow you to set URLs for Facebook, Meetup, Twitter, Tumblr, and Slack. These links will show up in the footer below the footer menu. If you need more social links, either ask Cara to add more or if you're code-savvy you can contribute to the Side Projects Club Chapter code base.

#### Menus

In Appearance > Menus, you can build menus. In the "Menu Settings" section, once you have created a menu, check "Primary Menu" to load your menu in the main navigation bar, or "Footer Menu" to load your menu in the footer.

---

### Recommended Plugins

- [All in One SEO Pack](https://wordpress.org/plugins/all-in-one-seo-pack/)
  - For setting meta descriptions, creating site maps, etc.
- [All-in-One Event Calendar](https://wordpress.org/plugins/all-in-one-event-calendar/)
  - For creating events for your chapter.
  - The Side Projects Club Chapter theme also overrides the colors for this plugin to keep it inline with the brand.
- [Anti-spam](https://wordpress.org/plugins/anti-spam/)
  - For preventing spam in comments.
  - So far the Side Projects Club website has low enough traffic that spam has not become an issue yet, but it's probably best to prevent it early just in case.
- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
  - For simple contact forms.
  - The Side Projects Club Chapter theme also styles Contact Form 7's forms slightly, so these forms should not require additional formatting.
- [Contact Form DB](https://wordpress.org/plugins/contact-form-7-to-database-extension/)
  - For tracking contact form submissions.
  - In addition to Contact Form 7 emailing your designated email address whenever a form is filled out, Contact Form DB will save records of each form submission if you would like to see these in one place instead of sifting through your inbox.
- [Contact Form 7 Honeypot](https://wordpress.org/plugins/contact-form-7-honeypot/)
  - For preventing spam in Contact Form 7 form submissions
