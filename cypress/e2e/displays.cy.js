/*
 * Copyright (c) 2022 Xibo Signage Ltd
 *
 * Xibo - Digital Signage - http://www.xibo.org.uk
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 */

describe('Displays', function () {

    beforeEach(function () {
        cy.login();
    });

    it('should display map and revert back to table', function() {

        cy.visit('/display/view');

        cy.wait(500);

        cy.get('#displays_wrapper.dataTables_wrapper').should('have.length', 1);

        cy.get('#map_button').click();

        cy.wait(500);

        cy.get('#map.leaflet-container').should('have.length', 1);

        cy.get('#list_button').click();

        cy.get('#displays_wrapper.dataTables_wrapper').should('have.length', 1);
    });
});