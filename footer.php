            <footer class="footer wrapper" role="contentinfo">

				<div id="inner-footer">

					<?php if ( wp_is_mobile() ) {}

                        else {

                            get_template_part ('partials/navigation' , 'footer');

                        }

                    ?>

                    <p class="legal">Tatton Investment Management is a trading style of Cambridge Investments Limited which is authorised and regulated by the Financial Conduct Authority. Cambridge Investments Limited Registered in England and Wales. No. 1370458. Registered Address: Paradigm House, Brooke Court, Wilmslow, Cheshire, SK9 3ND. The value of your investments and the income from them can fluctuate and it is possible that investors may not get back the amount they invested. Past performance is not a guide to future performance. The information contained within the website does not constitute investment advice or a recommendation for any product and you should not make any investment decisions on the basis of it. The information contained within the website is subject to the UK regulatory regime and is therefore primarily targeted at customers in the UK.</p>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
