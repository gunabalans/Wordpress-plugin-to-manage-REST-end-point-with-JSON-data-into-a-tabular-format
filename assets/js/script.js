/**
 * Custom scripts to make table from json data
 * 
 * @category  JS
 * @package   Kilinjal
 * @author    Gunabalan <gunabalans@yahoo.com>
 * @copyright 2020 Gunabalan
 * @license   http://www.gnu.org/licenses/gpl-2.0.txt GPL-2.0-or-later
 * @version   GIT: 1.0.0
 * @link      https://netkathir.com
 */

$(document).ready(
    function () {
        /**
        * Make request to genrate user table
        */
        Person.get_all();
    }
);


/**
 * Popup box data and model
 */
let Person = {

    get_all: function () {
        $.getJSON(
            "https://jsonplaceholder.typicode.com/users", function (data) {

                var table = $('<table />');
                table.attr('id', 'kilinjaltable');

                var tr = $('<tr />');

                var trhead = tr.clone();
                //add heaer to table
                var idHead = $('<th />').text('ID');
                var nameHead = $('<th />').text('Name');
                var usernameHead = $('<th />').text('User Name');

                trhead.append(idHead);
                trhead.append(nameHead);
                trhead.append(usernameHead);

                table.append(trhead);

                //add body part of table
                $.each(
                    data, function (key, val) {
                        var row = tr.clone();
                        //set id to tr element 
                        row.attr('id', val.id);

                        //on click even on tr
                        row.on(
                            'click', function () {
                                Person.get_by_id(this.id);
                            }
                        );

                        var id = $('<td />').text(val.id);
                        var name = $('<td />').text(val.name);
                        var username = $('<td />').text(val.username);

                        row.append(id);
                        row.append(name);
                        row.append(username);
                        table.append(row);
                    }
                );

                table.appendTo("#grid");

            }
        );
    },

    get_by_id: function (user_id) {
        $.getJSON(
            "https://jsonplaceholder.typicode.com/users/" + user_id, function (user) {
                //we call model to pupup user information
                var modal = new tingle.modal(
                    {
                        footer: true,
                        stickyFooter: false,
                        closeMethods: ['overlay', 'button', 'escape'],
                        closeLabel: "Close",
                        cssClass: ['custom-class-1', 'custom-class-2'],
                        beforeClose: function () {
                            return true; // close the modal
                            return false; // nothing happens
                        }
                    }
                );

                const htmlString = `<h2>User Information</h2>
                           <p>ID       : ${user.id}</p>
                           <p>Name     : ${user.name}</p>
                           <p>User Name:${user.username}</p>`;
                modal.setContent(htmlString);

                // open modal
                modal.open();

                // add close button
                modal.addFooterBtn(
                    'Ok Done!', 'tingle-btn tingle-btn--danger', function () {
                        modal.close();
                    }
                );

            }
        );
    }

}//close person object
