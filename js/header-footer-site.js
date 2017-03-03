(function ($) {
    $(document).ready(function () {

        window.toggleDropdownNav = function (listener) {
            var thus = this;
            this.alreadyActive = null;
            this.listener = $(listener);
            this.toggling = function (e) {

                if (!$(e.currentTarget).hasClass('active')) {
                    $(e.currentTarget).addClass('active');

                    if ($(e.currentTarget) != thus.alreadyActive && $(this.alreadyActive).hasClass('active')) {
                        $(thus.alreadyActive).removeClass('active');
                    } else {
                        thus.alreadyActive = $(e.currentTarget);
                    }

                } else {
                    $(e.currentTarget).removeClass('active');
                    thus.alreadyActive = null;
                }
            };
            this.setListener = function () {
                $(thus.listener).on('click', function (e) {
                    thus.toggling(e);
                });

                $(document).on('click', function (e) {
                    if (!$(e.target).parents().hasClass('dropdown-nav active')) {
                        $(listener).removeClass('active');
                        thus.alreadyActive = null;
                    }
                });
            };

            this.setListener();
        };

        window.toggleFlatTab = function (tabHead, tabContent) {
            var thus = this;
            this.tabHead = $(tabHead);
            this.tabContent = $(tabContent);
            this.toggling = function (e) {

                var dataTab = $(e.currentTarget).attr('data-tab');

                $(thus.tabHead).removeClass('active-tab');
                $(thus.tabContent).removeClass('active-tab');
                $(e.currentTarget).addClass('active-tab');
                $(dataTab).addClass('active-tab');
            };
            this.setActiveTab = function (element) {

                var tab = $(element).attr('data-tab');

                $(thus.tabHead).removeClass('active-tab');
                $(thus.tabContent).removeClass('active-tab');
                $(element).addClass('active-tab');
                $(tab).addClass('active-tab');
            };
            this.setListener = function () {
                $(thus.tabHead).on('click', function (e) {
                    thus.toggling(e);
                });
            };

            this.setListener();
        };

        window.CardSearch = function (searchBox, cardToSearch) {
            var thus = this;
            this.searchBox = $(searchBox);
            this.cardToSearch = $(cardToSearch);
            this.data = [];
            this.getDataFromDOM = function () {

                for (var i = 0; i < thus.cardToSearch.length; i++) {

                    var textToSearch = {
                        index: null,
                        text: null
                    };

                    textToSearch.index = i;
                    textToSearch.text = $(thus.cardToSearch[i]).children('[data-to-search]').text().toLowerCase();
                    thus.data.push(textToSearch);
                }
            };
            this.actionSearch = function (e) {
                var textValue = e.target.value.toLowerCase();
                $('#category-not-found').hide();

                if (textValue != '') {

                    for (var i = 0; i < thus.data.length; i++) {
                        var charInData = thus.data[i].text;

                        if (charInData.search(textValue) != -1) {
                            $(thus.cardToSearch[i]).parents(cardToSearch).show();
                            $(thus.cardToSearch[i]).find(cardToSearch).show();
                            $(thus.cardToSearch[i]).show();
                            $(thus.cardToSearch[i]).addClass('search-on');
                        } else if (charInData.search(textValue) == -1) {
                            if (!$(thus.cardToSearch[i]).parents(cardToSearch).hasClass('search-on')) {
                                $(thus.cardToSearch[i]).hide();
                            }
                            if (i == (thus.data.length - 1) &&
                                    thus.data[(thus.data.length - 1)].text.toLowerCase().search(textValue) == -1) {

                                if (!$(thus.cardToSearch).hasClass('search-on')) {
                                    $('#category-not-found').show();
                                }
                            }
                            $(thus.cardToSearch[i]).removeClass('search-on');
                        }
                    }
                } else {
                    $(thus.cardToSearch).parents(cardToSearch).show();
                    $(thus.cardToSearch).show();
                    $(thus.cardToSearch).removeClass('search-on');
                }
            };
            this.setListener = function () {
                $(thus.searchBox).on('keyup', function (e) {
                    thus.actionSearch(e);
                });
            };

            this.getDataFromDOM();
            this.setListener();
        };
        //--------

        //for init dropdown nav with responsiveness action in flat board
//        var dropdownNav = new toggleDropdownNav($('.dropdown-nav'));

        //--------
    });
})(jQuery);