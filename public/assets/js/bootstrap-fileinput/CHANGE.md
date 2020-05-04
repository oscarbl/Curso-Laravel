Change Log: `bootstrap-fileinput`
=================================

## version 5.0.7

**Date:** _under development_

- (enh #1479): Methods updated:
   - Include `addToStack` method.
   - Remove `updateStack` method
   - Rename `clearStack` to `clearFileStack` method
- (enh #1478): Update Slovak Translations.
- (enh #1477): Update Czech Translations.
- (enh #1476): Update Hungarian Translations.
- (enh #1475): Prevent invalid thumb validation when `showPreview` is `false`.
- (enh #1474): Hide upload icon for file validation errors.
- (enh #1471): Improve pt-PT and pt-BR translations.
- (enh #1468): Update Uzbek Translations.
- (enh #1467): Update Czekh Translations.
- (enh #1466): Update Slovak Translations.
- (bug #1465): Correct content.length parsing issue in preview cache.
- (enh #1461): Allow two different max file count checks.
    - `maxFileCount` and `msgFilesTooMany` for files being selected before upload
    - `maxTotalFileCount` and `msgTotalFilesTooMany` for total files selected and files included in initial preview
- (enh #1448): New boolean properties `focusCaptionOnBrowse` and `focusCaptionOnClear` which default to `true`.

## version 5.0.6

**Date:** 11-Sep-2019

- (enh #1464): Correct preview frame float styling issues.
- (bug #1463): Correct file input unlock after file validation errors (for non-ajax mode).
- (bug #1460): Correct `filebatchselected` event trigger.
- (bug #1459): Upload Async does not recognize initialPreview correctly for ajax response immediately sent with uploadUrl.
- (bug #1457): Correct `removeFromPreviewOnError` validation.
- (enh #1455): Default preview template to `other` when invalid file type is passed.

## version 5.0.5

**Date:** 23-Aug-2019

- (enh #1450): Update Russian Translations.
- (enh #1449): Lock file input while files are being read for preview.
- (enh #1446): New property `showConsoleLogs` to control display of plugin console messages.
- (enh #1445): Correct invalid thumb frame log errors.
- (enh #1442): Implement `.npmignore` to clean unwanted files for NPM package.
- (enh #1438): Activating Open Collective.
- (enh #1436): Improve Portuguese translations.
- (enh #1435): Handle special characters in file thumb id attribute.
- (enh #1429): Enhance thumbnail preview identifiers.

## version 5.0.4

**Date:** 30-Jun-2019

- (enh #1422): Correct drag indicator SCSS.
- (enh #1420): Correct `preferIconicPreview` parsing.
- (bug #1413): Correct `getFileStack` and `getFileList` methods.
- Implement sponsorship.
- Implement sentiment bot.

## version 5.0.3

**Date:** 12-May-2019

- (enh #1409): Correct the sequence of raise of `filechunksuccess` event.
- Implement stale bot.
- (enh #1400): Enhance image auto orientation for zoom images when thumbnail is hidden.
- (enh #1399): Enhance Krajee Explorer themes for better image preview.
- (enh #1398): Resumable uploads enhancements (only when `enableResumableUpload` is `true`):
    - Add new properties to fileActionSettings:
        - `indicatorPaused`
        - `indicatorPausedTitle`
    - Enhance pause and resume behavior by showing appropriate indicators on the file thumbnails
    - Add `resume` method and enhance `pause` method for resumable uploads
    - Remove upload button from individual thumbnails and ability to upload selective single file for resumable uploads.
- (enh #1397): Correct `uploadParamNames` to include all parameters.

## version 5.0.2

**Date:** 18-Apr-2019

- (enh #1394): New error message properties (updates to locales).
    - `msgProgressError`
    - `msgDeleteError`
    - `msgUploadError` (modification)
- (enh #1393): Standardize error alert formats for ajax deletes.
- (enh #1136): Allow proper retry of error uploads based on `retryErrorUploads` setting.
- Better management of console log messages.
- (bug #1391): Correct resumable upload progress update behavior when `showPreview` is `false`.
- (bug #1390): Correct remove button display validation set via `fileActionSettings`.
- (bug #1385): Correct resize image error.
- (bug #1383): Validate for undefined zoom data.

## version 5.0.1

**Date:** 26-Mar-2019

- (enh #1382):  Better defaults for `resumableUploadOptions.chunkSize` and `progressDelay`.
    - Set defaults for `progressDelay` to `0` and `resumableUploadOptions.chunkSize` to `2048 KB` i.e. (`2 MB`)
- (bug #1381): Fix `uploadExtraData` to be submitted correctly with ajax responses.
- (enh #1379): Add ability to sanitize zoom cache. New property `sanitizeZoomCache` which is a function callback and defaults to:
    ```js
    function(content) {
        var $container = $(document.createElement('div')).append(content);
        $container.find('input,select,.file-thumbnail-footer').remove();
        return $container.html();
    }
    ```
- (enh #276): Add ability to change ajax submission URL dynamically e.g. `uploadUrl`, `deleteUrl`, `resumableUploadOptions.testUrl`. 
  These can now be also setup as a function callback that will be executed at runtime.

## version 5.0.0

### MAJOR RELEASE

**Date:** 24-Mar-2019

- (enh #1378): Allow throttling / delaying xhr progress updates.
    - New property `uploadProgressDelay` in microseconds - will default to `100`  - this will control how frequent the xhr upload progress will be checked. If set to null or 0 - will do it every microsecond.
    - New property `maxAjaxThreads` (will default to `5`) that will allow to spawn only this limit of ajax requests in parallel.
    - The above is complemented by `resumableUploadOptions['maxThreads']` (defaults to 4) which is applicable for spawning number of ajax chunk requests for resumable uploads. The `resumableUploadOptions['maxThreads']` property must be less than or equal to `maxThreads` - else it will be over-ridden by `maxThreads` global setting.
- (enh #1377): Display extended upload statistics like bitrate and pending time.
    - add `layoutTemplates['stats']` for displaying stats
    ```js
    layoutTemplates.stats = '<div class="text-info file-upload-stats">' +
        '<span class="pending-time">{pendingTime}</span> ' +
        '<span class="upload-speed">{uploadSpeed}</span>' +
        '</div>';
    ```
    - token `{stats}` will be replaced with above
    - by default '{stats}' will be appended at the end of `layoutTemplates['progress']`
    - display pending time remaining and upload speed within stats
    - enhance xhr progress to support updating stats
- (enh #1374): Allow exif data of images to be read from server.
    - `initialPreviewConfig` sent from the server can contain the `exif` property as an object.
    - allows auto orientation of JPEG image files based on exif orientation
    - `autoOrientImageInitial` is a new boolean property that controls whether images need to be auto-oriented based on exif orientation.
- (enh #1373): Selectively disable file selection and preview for certain file extensions.
        - `allowedPreviewTypes` (existing)
        - `allowedPreviewMimeTypes` (existing)
        - `allowedPreviewExtensions` (new)
        - `disabledPreviewTypes` (new)
        - `disabledPreviewExtensions` (new) - defaults to `['msi', 'exe', 'com', 'zip', 'rar', 'app', 'vb', 'scr']`
        - `disabledPreviewMimeTypes` (new) - defaults to `['application/octet-stream']`
- (enh #1370): Add ability for pausing and resuming uploads
- (enh #1368): Better enhanced file management and queuing. 
    - New `fileManager` and `resumableManager` internal objects. 
    - `filestack` property has been removed
    - `addToFileStack` and `updateFileStack` methods have been removed
- (enh #1321): Add ability to define separate thumbnail and zoom images / file data. 
- (enh #1264, #1145): Allow configurable file actions as a callback. 
    - The `showXXX` properties in `fileActionSettings` ca3n now be setup as a callback.
    - Can read any property from the `initialPreviewConfig` for initial preview thumbnails
- (enh #1249, #290): Add capability for resumable and chunk uploads.
    - New properties `enableResumableUpload` and `resumableUploadOptions`

## version 4.5.3

**Date:** 21-Mar-2019

- (enh #1371): Capture file identifier in thumbnails
- (enh #1367, #1286): Better validation of piexif.js and other code enhancements.
- (enh #1362, #1337, #1269): AutoOrientImage enhancement for mobile safari.
- (enh #1336): Ability to configure `alt` and `title` attributes for images in `initialPreviewConfig`.

## version 4.5.2

**Date:** 03-Jan-2019

- (enh #1342): Update Turkish Translations.
- (enh #1339): Better validation of `createObjectURL` and `revokeObjectURL`.
- Update examples\index.html to use latest jQuery, Bootstrap & Font Awesome libraries.
- (enh #1333): Update Galician Translations.
- (enh #1332): Update Chinese Translations.
- (enh #1325): Update README for NPM install.
- (bug #1324): Error in IE11 Folder drag and drop.
- (enh #1322): Add Uzbek Translations.
- (enh #1320): New events for files dragged and dropped.
- (enh #1319): Enhance mimeType parsing via `mimeTypeAliases`.
   - allows quicktime `.mov` files to be previewed in non Apple browsers like Chrome/Firefox/IE.
- (enh #1318): Configure PDFjs viewer for IE11 pdf preview.
- (enh #1314): Update Hebrew Translations.
- (enh #1313): Correct file type function validation.
- (enh #1311): Correct preview zoom modal keydown next and prev keyboard behavior.
- (enh #1308): Enhance audio file preview thumbnail styling.
- (enh #1298): New `encodeUrl` boolean option that encodes all URL passed by default.

## version 4.5.1

**Date:** 25-Sep-2018

- (enh #1305): Correct `browseOnZoneClick` behavior.
- (enh #1297): Update default thumbnail shadow style.
- (enh #1286): Correct piexif library load validation.

## version 4.5.0

**Date:** 30-Aug-2018

- (enh #1292): Update DOMPurify plugin to the latest release.
- (enh #1291): Update Dutch Translations.
- (enh #1290): Enhance `htmlEncode` to parse undefined variables.
- (enh #1288): Update Dutch Translations.
- (enh #1287): Correct full screen modal styling.
- (enh #1286): Default `autoOrientImage` to `false`.
- (enh #1285): Update Danish Translations.
- (bug #1282): Allow `filebrowse` event to be prevented.
- (enh #1279): Enhance `usePdfRenderer` callback check to detect android phones.
- Correct nuget batch file.

## version 4.4.9

**Date:** 25-Jul-2018

- (bug #1276): More correct validation of `previewContentTemplates`.
- (enh #1275): Update Farsi Translations.
- (enh #1272, #1273): Add Hebrew Translations.
- (enh #1269, #1270): Enhance auto orientation of images using piexif.js.
- Enhance progress bar text styling.
- (enh #1254): Enhance PDF Preview on iOS devices via external PDF renderer (PDFJS).
- (bug #1242): Correct drop zone enabling check for ajax uploads.
- (bug #1232): Correct RTL input group button styling.
- (enh #1228): Enhance and correct preview refresh for various scenarios.
- (bug #1226): Enhance native input display styling when `showBrowse` is `false`.
- (enh #1223): Update Font Awesome 5.x theme icons.

## version 4.4.8

**Date:** 11-Apr-2018

- (enh #1221): Update Indonesian Translations.
- (enh #1220): Add Krajee Explorer Font Awesome 5 Theme (`explorer-fas`).
- (enh #1219): Update Chinese translations.
- (bug #1217): Fix drag and drop to send files correctly for form submission.
- (enh #1216): Add drag and drop support for folders for webkit browsers (only for ajax upload mode).
- (bug #1215): Correct zoom preview for errored thumbnails.
- (enh #1210): Enhance support for Office Docs Preview and Google Docs Preview.
- (bug #1204): Correct merging of ajax callbacks.
- (bug #1201, #1200): Correct `elErrorContainer` validation for `browseOnZoneClick`.
- (enh #1197): Add new Font Awesome 5 Theme.
- (enh #1193): Add drag and drop functionality for form based submissions.
- (enh #1179): New property `reversePreviewOrder` to allow reversing files displayed in preview.
- (enh #1178): Enhance BS button styling for default and FA themes.
- (bug #1173): Correct `showRemove` validation in `fileActionSettings`.
- (enh #1168): Update Ukranian translations.
- (enh #1166): Update Hungarian translations.
- (enh #1148): Update font awesome themes to include missing download icon.

## version 4.4.7

**Date:** 22-Jan-2018

- Update copyright year to current.
- (enh #1164): Update Slovak translations.
- (enh #1163): Update Czech translations.
- (enh #1159): Update Portuguese Brazilian translations.
- (enh #1157, #1158): Update input group styles for BS4 beta3.
- (bug #1152): Correct preview thumbs stacking post sorting and/or ajax deletion.
- (enh #1149): Enhance download button behavior to allow Firefox browser to download.
- (enh #1143): Correct translation path in docs.
- (enh #1142, #1141): Update Georgian translations.
- (enh #1138, #1137): Update Italian translations.
- (enh #1134): Update Polish translations.
- (enh #1131): New public method `readFiles` to allow input & preview of file objects programmatically.
- (enh #1128, #1129): Update rubaxa sortable plugin to fix Chrome support errors.
- (enh #1127): Update Italian Translations.

## version 4.4.6

**Date:** 13-Nov-2017

- (enh #1125): Create CODE_OF_CONDUCT.md.
- (bug #1123): Correct error container close button click behavior for various scenarios.
- (enh #1121): Update Spanish Translations.
- (enh #1119): Enhance close button icon markup as per BS4 norms.
- (enh #1118): Better file action button style.
- (bug #1117): Reset `ajaxAborted` status more correctly before upload.
- (enh #1113): Correct slug default callback to include hyphens in file name.
- (enh #1111): Enhance default file download action to use `button` markup.
- (enh #1110): Add support for previewing TIFF, EPS, AI, WMF files.
- (bug #1108): Correct sortable drag element parsing during sorting.
- (enh #1106): Update Portuguese BR Translations.
- (enh #1105): Update Russian Translations.
- (enh #1103): Update German Translations.
- (enh #1099): Enhance mime type parsing for IE 11. 
- (enh #1097): Add support for previewing Office file formats (e.g. docx, xlsx, pptx). 
    - Supports all common formats that google docs can view.
    - Available only for initial preview content (where the document is accessible via a public web link).
- Update README to include updated cover images for bootstrap-fileinput themes (with Bootstrap 4.x support).
- (enh #1096): Update Czech language folder and code to ISO code `cs`.
- (bug #1095): Fix resize image when used with non JPEG images (silently ignoring `piexif` errors).
- (enh #1094): Update French Translations.

## version 4.4.5

**Date:** 01-Oct-2017

- Update readme and example index to use plugin's CDN libraries.
- (enh #1093): Revamp SCSS with better variables and extensions.
- (enh #1091): Set default button type for close button markup template.
- (enh #1090): Auto detect intelligently the preview type based on file content.
- (enh #1087): Enhance SCSS/SASS styling configurations.
- (enh #1086): New placeholder property and various caption rendering enhancements.
- (enh #1085): Update Slovak Translations.
- (enh #1084): Update Czech Translations.

## version 4.4.4

**Date:** 21-Sep-2017

**_This release adds Bootstrap v4.x support._**

- (enh #1082, #1083): Better handling of errors when `showPreview` is `false`.
- (enh #1080): Enhance styling of zoom modal header and buttons.
- (bug #1079): Correct initial preview rendering when no `initialPreviewConfig` supplied.
- (enh #1078): Correct markup during file validation errors (non-ajax mode).
- (enh #1075): Enhance initial preview delete behavior (ensure `previewCache` splices deleted initial preview content items).
- (enh #1073): Enhance `refresh` method to overwrite options.
- (enh #1072): Enhance preview thumb templates to allow setting CSS styles (BC Breaking).
- (enh #1071): Auto detect small screen width and auto style/auto fit preview thumbnails.
- (enh #1070): Include new download action button for initial preview thumbnails.
- (enh #1069): Enhance action buttons to parse new `{key}` & `{filename}` tags.
- (bug #1068): Add ability to merge ajax callbacks when overriding ajax settings.
- (bug #1066): Correct `removeFromPreviewOnError` validation.
- (enh #1065): Enhancements to support Bootstrap v4.x framework.
- (enh #1064): Update Chinese Translations.

## version 4.4.3

**Date:** 27-Aug-2017

- (enh #1059): Better form reset behavior and update of `reset` method in docs.
- (enh #1056): Add Lithuanian Translations.
- (enh #1050): Update Japanese Translations & Locales.
- (enh #1049): New property `uploadUrlThumb`.
- (enh #1048): Add ability to retry errored file uploads.
    - New plugin properties added:
        - `retryErrorUploads`: _boolean_, will determine if errored out thumbnails can be retried for upload and submitted again.
        - `fileActionSettings.uploadRetryIcon`: Will change the icon of the upload button to retry icon specified here.
        - `fileActionSettings.uploadRetryTitle`: Will change the title of the upload button to retry title specified here.
        - `msgUploadError`: will be displayed within the progress bar on the errored out thumbnails.
    - Other enhancements include:
        - resetting progress bar correctly
        - enhancing upload validation behavior so that if `retryErrorUploads` is `false`, then no upload button is shown on the errored out thumbnails.
- (enh #1044): Add Slovak Translations.
- (enh #1043): Add Czech Translations.
- (enh #1042, #830): Fixes to initial preview delete (related to #1034).
- (enh #1038): Fix documentation for `{dataKey}`.
- (enh #1034): Add new event `filebeforedelete` and enhance delete abort logic.
- (enh #1033): Correct reset of preview in `reset` method.
- (enh #1031): Update French Translations.
- (bug #1030): Correct image dimension validation to consider non JPEG images.
- (enh #1015): Enhancement to RTL styling.
- (enh #1014): Enhancements to file upload single.
- (enh #1012): Better formatting of ajax errors display.
- (enh #1006): Update Farsi Translations.

## version 4.4.2

**Date:** 24-Jun-2017

- (enh #1005): Update Dutch Translations.
- (enh #1004): New Krajee Explorer Font Awesome Theme.
- (bug #995): Correct and fix image load jquery event triggering for browser cache scenarios.
- (enh #991): Add Azerbaijan Translations.
- (enh #990): Ability to hide thumbnail content (`hideThumbnailContent`) and display only file name/size.
- (enh #989): Update Chinese Translations.
- (enh #987): Zoom preview arrows orientation for RTL.
- (enh #986): Image width parsing and styling enhancements.
- (enh #985): Do not reset input when upload fails (single-upload mode).
- (enh #981): Update Hungarian Translations.
- (enh #977): Add RTL capability (new property `rtl` to be set) - includes new `fileinput-rtl.css` (to be loaded after `fileinput.css` for RTL styling).
- (enh #973): Add SCSS image path variable and file-image alt style updates.

## version 4.4.1

**Date:** 25-May-2017

- (enh #980): Add new method `getFrames` to get all thumbnail frames as jQuery objects.
- (enh #979): Add new method `getExif` to retrieve exif data for a selected jpeg image.
- (enh #978, #974): Implement exif restoration for resized images via [`piexif` plugin](https://github.com/hMatoba/piexifjs).
- (enh #968): Update Turkish Translations.
- (enh #967): Correct file caption display for ajax upload mode when `showPreview` is `false`.

## version 4.4.0

**Date:** 13-May-2017

- (enh #966): Add Estonian Translations.
- (enh #965): New `required` and `msgFileRequired` properties.
- (bug #958): Create `setTokens` string helper for easier replacement of tokens.
- (bug #956): Correct initial preview file thumb deletions.
- (bug #955): Remove unnecessary `sourceMappingUrl` in `purify.min.js`.
- (enh #954): Add minified theme assets.
- (enh #952): Auto orientation of image based on EXIF data (new property `autoOrientImage`).
- (enh #950, #930): Add responsive support for Krajee Explorer theme for mobile devices.
- (enh #949): Sortable plugin enhancements and prevent scroll when dragging on mobile devices.
- Chronological ordering of issues for change log.
- (enh #947): Correct `showDelete` validation in `fileActionSettings`.
- (enh #946): Enhance iconic preview validation to ignore extension case if possible.
- (enh #944): Publish v4.3.9 release to NPM.
- (enh #942): Enhance indicator and drag templates. New layout template `indicator`.
- (enh #941): Correct `data-fileindex` validation.
- (bug #940): Correct validation of `initialPreviewShowDelete`.
- (enh #936): Enhance custom validation when ajax abort is triggered via event manipulation.
- (enh #934): Update Russian translations.
- (enh #929): Add Norwegian translations.
- (enh #926): Add Galician translations and update Spanish translations.
- (enh #924): Update Farsi Translations.
- (enh #921): Enhance zoom preview slide-show to show loading indicator during image change.
- (enh #920): Cancel ajax abort action more correctly.
- (bug #919): Fix resize validation.
- Parse all numeric properties correctly.
- (enh #915): Update default styling for zoom preview for object.
- (enh #910): New property `resizeIfMoreThan` to control image resize conditionally.
- (bug #899): Fix multiple file selection for non-ajax scenario.
- (enh #477): Enhance and correct IE10 fileinput click misbehavior.

## version 4.3.9

**Date:** 02-Apr-2017

- (enh #914): Update Portuguese BR translations.
- (enh #913): Better id parsing and resetting of uploaded file thumbnails.
- Enhance zoom preview styling for Krajee Explorer theme.
- More correct validation of `allowedFileTypes` to accept null values.
- (enh #909): Update German Translations.
- (enh #906): Add Swedish Translations.
- (enh #905): Prevent duplicate files to be dragged and dropped.
- (enh #902): Enhance zoom preview styling for large height images.
- (bug #900): Correct `overwriteInitial` validation for async batch uploads returning dynamic initial preview post upload.
- (enh #898): New plugin method to get files in preview and config.
- (enh #894, #895): Correct file size validation for empty files.
- (bug #893): Correct `file-success-remove` event handling.
- (bug #890): Fix doubling of images for async bulk uploads when initial preview is returned via ajax response.
- Enhance uploaded thumb frames to not reset or change the frame identifier after successful upload.
- (enh #887): New properties `msgUploadBegin` and `msgUploadEnd` to display a better progress status. The `layoutTemplates.progress` will support a new token `{status}`.
- Enhance events like `fileclear` and `filepreajax` to be aborted via `event.preventDefault()`.
- (enh #886): Append zoom modal dialog to `body` element if available to avoid multiple BS modals conflict. 
- (bug #885): Correct validation for `allowedFileTypes`. 
- (enh #875): Reset form based events more correctly to allow multiple bootstrap file inputs within forms.
- (bug #882): Correct image resize validation.
- (enh #881): Update Spanish Translations.
- (enh #863): New plugin method `zoom` with parameter `frameId` to allow custom triggering of zoomed preview for each thumbnail frame.

## version 4.3.8

**Date:** 21-Feb-2017

- (enh #879): Update Russian Translations.
- (enh #876): Update Spanish Translations.
- (enh #874): Enhance/Standardize CSS Styles for Krajee Default Theme.
- (bug #872): Correct typo in `bootstrap.min.css`.
- (bug #870): Correct config.width parsing.

## version 4.3.7

**Date:** 11-Feb-2017

- (enh #862): Launch a brand new Krajee theme: `explorer`.
- (enh #861): New properties within `layoutTemplates`.
- (enh #860): Initialize template defaults in a better manner.
- (enh #859): Enhance and revamp preview caching.
- (enh #858): Thumb Frame CSS class as configurable property.
- (enh #857): Default error handling for unknown ajax errors.
- (enh #854): Better file size calculation and display.
- (bug #852): Ensure `frameClass` setting in `initialPreviewConfig` is considered. 
- (enh #851): Create Kazakh Translations. 
- (enh #847): Update German Translations. 
- (enh #662, #725): Enhance preview modal to be appended to body before each zoom action (if `body` tag exists). 
- (enh #844): Display zoom preview navigation buttons only when multiple files exist.
- (bug #839): Correct `initialPreview` generation and sortable behavior for async uploads.
- (enh #837): Update Czech Translations.
- (enh #835): Update Polish Translations.
- (bug #834): Correct clearing of file preview including zoom cache.
- (bug #833): Correct validation and defaults init for `allowedPreviewTypes`.
- (enh #831): Update Finnish Translations.
- (enh #828): Allow drag sort of single uploaded thumbnails with `initialPreview` config set (post upload).
- (bug #826): Extend language configuration to consider defaults.
- (bug #825): Correct `fileimagesresized` event triggering.
- (enh #824): Add Korean Translations.
- (enh #823): Correct file indices assignment during validation of images.
- (enh #822): Enhancement for preventing upload when data is empty. New property `msgUploadEmpty` has been incorporated.
- (enh #820): Prevent resize if image is smaller than allowed dimensions.
- (bug #819): Correct init preview auto replace post `uploadSingle` action in thumbnails.
- (enh #816): New property `msgFileTypes` to control descriptions/localizations of file types displayed.
- (enh #815): Enhance parsing of thumbnails that are visible in preview (will allow plugin to be 
   initialized in hidden containers like tabs).
- (enh #812): Update Greek Translations.

## version 4.3.6

**Date:** 17-Dec-2016

- (enh #809): Various enhancements for preview control and iconic thumbnails.
    - add ability to control and render different previews for file thumbnails and zoomed preview content
    - new property `preferIconicPreview` will try to parse the `previewFileIconSettings` and `previewFileExtSettings` to automatically force iconic previews for file thumbnails.
    - new property `preferIconicZoomPreview` will try to parse the `previewFileIconSettings` and `previewFileExtSettings` to automatically force iconic previews in the zoomed content.
    - the above properties will be applied and parsed for `initialPreview` content as well.
- (enh #804): Add Slovenian Translations.
- (enh #803): Update Hungarian Translations.
- (enh #802): Allow MOV files preview for supported devices and browsers.
- (enh #800): Update Spanish Translations.
- (enh #799): Fix IE memory issue on image load.
- (enh #791): Auto orientation of images based on EXIF data.
- (enh #788): New validation for minimum file size:
   - new property `minFileSize` which validates the minimum file size in KB for upload, else throws
     a validation error using `msgSizeTooSmall`. This defaults to `0`.
   - if `minFileSize` is set to `null`, then above validation is skipped and no minimum file size 
     check is performed.
- (enh #782): New validation for invalid slug file name (caption):
   - if slug callback returns an empty string, then an error will be thrown using `msgInvalidFileName`.
   - if slug callback returns `false` then the next file will be read and current file skipped.
- (enh #779, #789): More correct thumbnail identification post rearrange.
- (enh #769, #785, #786, #787): Better image resized event handling.
- (enh #771): Update Chinese Translations.
- (enh #764): Update Russian Translations.
- (enh #696): Better default preview zoom settings.

## version 4.3.5

**Date:** 20-Sep-2016

- (bug #758): Correct file slug name parsing for an invalid file extension.
- (bug #753): Correct IE11 file clear bug when using without ajax.
- (enh #745): Update Russian Translations.
- (enh #741): Update Vietnamese Translations.
- (enh #736): Update Portugese Brazilian Translations.
- (bug #734): Correct right parsing of `fileuploaded` event params.

## version 4.3.4

**Date:** 07-Aug-2016

- (enh #731): New method `getFilesCount` for returning upl + non-upl files count.
- (enh #730): Correct Romanian Translations.
- (enh #729): Implement `progressUploadThreshold` to show processing when waiting for server response.
- (enh #728): Change sortable plugin name to avoid conflict with JUI Sortable.
- (bug #722): Correctly concat ajax output in initial preview.
- (enh #721): Update Turkish Translations.
- (enh #719): Pass right `previewId` to `fileuploaded` event.