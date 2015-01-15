Readme file for the IDZ instructable block module for idz
---------------------------------------------

IDZ instructable block module is a custom module, offering a responsive block 
which display sets of 20 instructable images order by favorites and 
top 2-4 will have bigger images and rest will be smaller images. When user tap
on any image, pop out a larger image and how additional information like 
Author name.

Installation:
  Installation is like with all normal drupal modules:
  modules directory from your website (sites/all/modules/custom).

Dependencies:
  The IDZ instructable block module has no dependencies, nothing special is 
  required.

Configuration:
  The default block configuration form has been altered to set following items:
  1. Instructable cron job interval (In hours): To determine how and when api
    data will be stored in system cache table.
  2. Description: To provide brief description 
  3. Link (Label) and Link (Value): For a link 
  