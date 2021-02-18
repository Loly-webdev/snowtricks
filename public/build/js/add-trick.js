(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["js/add-trick"],{

/***/ "./assets/js/add-trick.js":
/*!********************************!*\
  !*** ./assets/js/add-trick.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace */ "./node_modules/core-js/modules/es.string.replace.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

(function () {
  var containerPicture = document.getElementById('trick_pictures');
  var containerVideo = document.getElementById('trick_videos');
  var indexPicture = containerPicture.querySelectorAll('.add-trick-form-row').length;
  var indexVideo = containerVideo.querySelectorAll('.add-trick-form-row').length;

  if (indexPicture == 0) {
    addPictureForm(containerPicture);
  }

  if (indexVideo == 0) {
    addVideoForm(containerVideo);
  }

  document.querySelector('.btn-add-picture').addEventListener('click', function (event) {
    event.preventDefault();
    addPictureForm(containerPicture);
  });
  document.querySelector('.btn-add-video').addEventListener('click', function (event) {
    event.preventDefault();
    addVideoForm(containerVideo);
  });

  function addRemoveBtn() {
    document.querySelectorAll('button.btn-delete-picture.fas.fa-trash-alt').forEach(function (element) {
      element.addEventListener('click', function (event) {
        event.preventDefault();
        this.parentNode.remove();
      });
    });
    document.querySelectorAll('button.btn-delete-video.fas.fa-trash-alt').forEach(function (element) {
      element.addEventListener('click', function (event) {
        event.preventDefault();
        this.parentNode.remove();
      });
    });
  }

  function addPictureForm(containerPicture) {
    var prototypePicture = containerPicture.getAttribute('data-prototype');
    var templatePicture = prototypePicture.replace(/__name__/g, indexPicture);
    containerPicture.insertAdjacentHTML('beforeend', templatePicture);
    indexPicture++;
    addRemoveBtn();
  }

  function addVideoForm(containerVideo) {
    var prototypeVideo = containerVideo.getAttribute('data-prototype');
    var templateVideo = prototypeVideo.replace(/__name__/g, indexVideo);
    containerVideo.insertAdjacentHTML('beforeend', templateVideo);
    indexVideo++;
    addRemoveBtn();
  }
})();

/***/ })

},[["./assets/js/add-trick.js","runtime","vendors~js/add-trick~js/edit-trick"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYWRkLXRyaWNrLmpzIl0sIm5hbWVzIjpbImNvbnRhaW5lclBpY3R1cmUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiY29udGFpbmVyVmlkZW8iLCJpbmRleFBpY3R1cmUiLCJxdWVyeVNlbGVjdG9yQWxsIiwibGVuZ3RoIiwiaW5kZXhWaWRlbyIsImFkZFBpY3R1cmVGb3JtIiwiYWRkVmlkZW9Gb3JtIiwicXVlcnlTZWxlY3RvciIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiYWRkUmVtb3ZlQnRuIiwiZm9yRWFjaCIsImVsZW1lbnQiLCJwYXJlbnROb2RlIiwicmVtb3ZlIiwicHJvdG90eXBlUGljdHVyZSIsImdldEF0dHJpYnV0ZSIsInRlbXBsYXRlUGljdHVyZSIsInJlcGxhY2UiLCJpbnNlcnRBZGphY2VudEhUTUwiLCJwcm90b3R5cGVWaWRlbyIsInRlbXBsYXRlVmlkZW8iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUEsQ0FBQyxZQUFZO0FBQ1QsTUFBTUEsZ0JBQWdCLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixnQkFBeEIsQ0FBekI7QUFDQSxNQUFNQyxjQUFjLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixjQUF4QixDQUF2QjtBQUVBLE1BQUlFLFlBQVksR0FBR0osZ0JBQWdCLENBQUNLLGdCQUFqQixDQUFrQyxxQkFBbEMsRUFBeURDLE1BQTVFO0FBQ0EsTUFBSUMsVUFBVSxHQUFHSixjQUFjLENBQUNFLGdCQUFmLENBQWdDLHFCQUFoQyxFQUF1REMsTUFBeEU7O0FBRUEsTUFBSUYsWUFBWSxJQUFJLENBQXBCLEVBQXVCO0FBQ25CSSxrQkFBYyxDQUFDUixnQkFBRCxDQUFkO0FBQ0g7O0FBQ0QsTUFBSU8sVUFBVSxJQUFJLENBQWxCLEVBQXFCO0FBQ2pCRSxnQkFBWSxDQUFDTixjQUFELENBQVo7QUFDSDs7QUFFREYsVUFBUSxDQUFDUyxhQUFULENBQXVCLGtCQUF2QixFQUEyQ0MsZ0JBQTNDLENBQTRELE9BQTVELEVBQXFFLFVBQVVDLEtBQVYsRUFBaUI7QUFDbEZBLFNBQUssQ0FBQ0MsY0FBTjtBQUNBTCxrQkFBYyxDQUFDUixnQkFBRCxDQUFkO0FBQ0gsR0FIRDtBQUtBQyxVQUFRLENBQUNTLGFBQVQsQ0FBdUIsZ0JBQXZCLEVBQXlDQyxnQkFBekMsQ0FBMEQsT0FBMUQsRUFBbUUsVUFBVUMsS0FBVixFQUFpQjtBQUNoRkEsU0FBSyxDQUFDQyxjQUFOO0FBQ0FKLGdCQUFZLENBQUNOLGNBQUQsQ0FBWjtBQUNILEdBSEQ7O0FBS0EsV0FBU1csWUFBVCxHQUF3QjtBQUNwQmIsWUFBUSxDQUFDSSxnQkFBVCxDQUEwQiw0Q0FBMUIsRUFBd0VVLE9BQXhFLENBQWdGLFVBQUNDLE9BQUQsRUFBYTtBQUN6RkEsYUFBTyxDQUFDTCxnQkFBUixDQUF5QixPQUF6QixFQUFrQyxVQUFTQyxLQUFULEVBQWdCO0FBQzlDQSxhQUFLLENBQUNDLGNBQU47QUFDQSxhQUFLSSxVQUFMLENBQWdCQyxNQUFoQjtBQUNILE9BSEQ7QUFJSCxLQUxEO0FBTUFqQixZQUFRLENBQUNJLGdCQUFULENBQTBCLDBDQUExQixFQUFzRVUsT0FBdEUsQ0FBOEUsVUFBQ0MsT0FBRCxFQUFhO0FBQ3ZGQSxhQUFPLENBQUNMLGdCQUFSLENBQXlCLE9BQXpCLEVBQWtDLFVBQVVDLEtBQVYsRUFBaUI7QUFDL0NBLGFBQUssQ0FBQ0MsY0FBTjtBQUNBLGFBQUtJLFVBQUwsQ0FBZ0JDLE1BQWhCO0FBQ0gsT0FIRDtBQUlILEtBTEQ7QUFNSDs7QUFFRCxXQUFTVixjQUFULENBQXdCUixnQkFBeEIsRUFBMEM7QUFDdEMsUUFBTW1CLGdCQUFnQixHQUFHbkIsZ0JBQWdCLENBQUNvQixZQUFqQixDQUE4QixnQkFBOUIsQ0FBekI7QUFDQSxRQUFNQyxlQUFlLEdBQUdGLGdCQUFnQixDQUFDRyxPQUFqQixDQUF5QixXQUF6QixFQUFzQ2xCLFlBQXRDLENBQXhCO0FBQ0FKLG9CQUFnQixDQUFDdUIsa0JBQWpCLENBQW9DLFdBQXBDLEVBQWlERixlQUFqRDtBQUNBakIsZ0JBQVk7QUFDWlUsZ0JBQVk7QUFDZjs7QUFFRCxXQUFTTCxZQUFULENBQXNCTixjQUF0QixFQUFzQztBQUNsQyxRQUFNcUIsY0FBYyxHQUFHckIsY0FBYyxDQUFDaUIsWUFBZixDQUE0QixnQkFBNUIsQ0FBdkI7QUFDQSxRQUFNSyxhQUFhLEdBQUdELGNBQWMsQ0FBQ0YsT0FBZixDQUF1QixXQUF2QixFQUFvQ2YsVUFBcEMsQ0FBdEI7QUFDQUosa0JBQWMsQ0FBQ29CLGtCQUFmLENBQWtDLFdBQWxDLEVBQStDRSxhQUEvQztBQUNBbEIsY0FBVTtBQUNWTyxnQkFBWTtBQUNmO0FBRUosQ0F2REQsSSIsImZpbGUiOiJqcy9hZGQtdHJpY2suanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgY29udGFpbmVyUGljdHVyZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCd0cmlja19waWN0dXJlcycpO1xyXG4gICAgY29uc3QgY29udGFpbmVyVmlkZW8gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndHJpY2tfdmlkZW9zJyk7XHJcblxyXG4gICAgbGV0IGluZGV4UGljdHVyZSA9IGNvbnRhaW5lclBpY3R1cmUucXVlcnlTZWxlY3RvckFsbCgnLmFkZC10cmljay1mb3JtLXJvdycpLmxlbmd0aDtcclxuICAgIGxldCBpbmRleFZpZGVvID0gY29udGFpbmVyVmlkZW8ucXVlcnlTZWxlY3RvckFsbCgnLmFkZC10cmljay1mb3JtLXJvdycpLmxlbmd0aDtcclxuXHJcbiAgICBpZiAoaW5kZXhQaWN0dXJlID09IDApIHtcclxuICAgICAgICBhZGRQaWN0dXJlRm9ybShjb250YWluZXJQaWN0dXJlKTtcclxuICAgIH1cclxuICAgIGlmIChpbmRleFZpZGVvID09IDApIHtcclxuICAgICAgICBhZGRWaWRlb0Zvcm0oY29udGFpbmVyVmlkZW8pO1xyXG4gICAgfVxyXG5cclxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5idG4tYWRkLXBpY3R1cmUnKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgYWRkUGljdHVyZUZvcm0oY29udGFpbmVyUGljdHVyZSk7XHJcbiAgICB9KVxyXG5cclxuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5idG4tYWRkLXZpZGVvJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG4gICAgICAgIGFkZFZpZGVvRm9ybShjb250YWluZXJWaWRlbyk7XHJcbiAgICB9KVxyXG5cclxuICAgIGZ1bmN0aW9uIGFkZFJlbW92ZUJ0bigpIHtcclxuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdidXR0b24uYnRuLWRlbGV0ZS1waWN0dXJlLmZhcy5mYS10cmFzaC1hbHQnKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgICAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgICAgIHRoaXMucGFyZW50Tm9kZS5yZW1vdmUoKTtcclxuICAgICAgICAgICAgfSlcclxuICAgICAgICB9KVxyXG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2J1dHRvbi5idG4tZGVsZXRlLXZpZGVvLmZhcy5mYS10cmFzaC1hbHQnKS5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgICAgICAgICAgIGVsZW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZXZlbnQpIHtcclxuICAgICAgICAgICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICAgICB0aGlzLnBhcmVudE5vZGUucmVtb3ZlKCk7XHJcbiAgICAgICAgICAgIH0pXHJcbiAgICAgICAgfSlcclxuICAgIH1cclxuXHJcbiAgICBmdW5jdGlvbiBhZGRQaWN0dXJlRm9ybShjb250YWluZXJQaWN0dXJlKSB7XHJcbiAgICAgICAgY29uc3QgcHJvdG90eXBlUGljdHVyZSA9IGNvbnRhaW5lclBpY3R1cmUuZ2V0QXR0cmlidXRlKCdkYXRhLXByb3RvdHlwZScpO1xyXG4gICAgICAgIGNvbnN0IHRlbXBsYXRlUGljdHVyZSA9IHByb3RvdHlwZVBpY3R1cmUucmVwbGFjZSgvX19uYW1lX18vZywgaW5kZXhQaWN0dXJlKTtcclxuICAgICAgICBjb250YWluZXJQaWN0dXJlLmluc2VydEFkamFjZW50SFRNTCgnYmVmb3JlZW5kJywgdGVtcGxhdGVQaWN0dXJlKTtcclxuICAgICAgICBpbmRleFBpY3R1cmUrKztcclxuICAgICAgICBhZGRSZW1vdmVCdG4oKTtcclxuICAgIH1cclxuXHJcbiAgICBmdW5jdGlvbiBhZGRWaWRlb0Zvcm0oY29udGFpbmVyVmlkZW8pIHtcclxuICAgICAgICBjb25zdCBwcm90b3R5cGVWaWRlbyA9IGNvbnRhaW5lclZpZGVvLmdldEF0dHJpYnV0ZSgnZGF0YS1wcm90b3R5cGUnKTtcclxuICAgICAgICBjb25zdCB0ZW1wbGF0ZVZpZGVvID0gcHJvdG90eXBlVmlkZW8ucmVwbGFjZSgvX19uYW1lX18vZywgaW5kZXhWaWRlbyk7XHJcbiAgICAgICAgY29udGFpbmVyVmlkZW8uaW5zZXJ0QWRqYWNlbnRIVE1MKCdiZWZvcmVlbmQnLCB0ZW1wbGF0ZVZpZGVvKTtcclxuICAgICAgICBpbmRleFZpZGVvKys7XHJcbiAgICAgICAgYWRkUmVtb3ZlQnRuKCk7XHJcbiAgICB9XHJcblxyXG59KSgpXHJcbiJdLCJzb3VyY2VSb290IjoiIn0=