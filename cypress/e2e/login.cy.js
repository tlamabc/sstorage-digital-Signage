describe('Login', function() {

    it('should be able to login the default user', function () {

        cy.visit('/login').then(() => {

            cy.get('input#username')
                .type('admin');

            cy.get('input#password')
                .type('password');

            cy.get('button[type=submit]')
                .click();

            cy.url().should('include', 'dashboard');

            cy.contains('admin');
        });
    });

    it('should fail to login an invalid user', function () {

        cy.visit('/login').then(() => {
            cy.get('input#username')
                .type('admin');

            cy.get('input#password')
                .type('wrongpassword');

            cy.get('button[type=submit]')
                .click();

            cy.contains('Username or Password incorrect');
        });
    });
});