<?php
/*
Template Name: Teamvorstellung Form Template
*/

get_header();

$layout = onepress_get_layout();

/**
 * @since 2.0.0
 * @see onepress_display_page_title
 */
do_action( 'onepress_page_before_content' );

?>
	<div id="content" class="site-content">
        <?php onepress_breadcrumb(); ?>
		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

                <p>Auf dieser Seite ist es möglich eine Teamvorstellung zu erstellen. Um eine Fertige Teamvorstellung<br/>
				zu erhalten, muss jedes Teammitglied das Formular ausfüllen.<br/><br/>
				Im Rahmen dieser Projektarbeit wird eine Teamvorstellung benötigt.</p>


                <h1>Angaben zu deiner Person</h1>
				<form role ="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="t_vname">Wie lautet dein Vorname?</label>
                        <input type="text" id="t_vname" name="t_vname" placeholder="Bitte gib deinen Vornamen ein"
                        class="form-control input-sm" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="t_nname">Wie lautet dein Nachname?</label>
                        <input type="text" id="t_nname" name="t_nname" placeholder="Bitte gib deinen Nachnamen ein"
                        class ="form-control input-sm" required=""/>
                    </div>
					<div class="form-group">
                        <label for="t_alter">Wie Alt bist du?</label>
                        <input type="text" id="t_alter" name="t_alter" placeholder="Bitte gib dein Alter an (Zahl [z.B.: 21])"
                        class ="form-control input-sm" required=""/>
                    </div>
					<div class="form-group">
                        <label for="t_beruf">In Beruf arbeitest du?</label>
                        <input type="text" id="t_beruf" name="t_beruf" placeholder="Bitte gib deinen Beruf an"
                        class ="form-control input-sm" required=""/>
                    </div>
					<div class="form-group">
                        <label for="t_ort">Wo wohnst du?</label>
                        <input type="text" id="t_ort" name="t_ort" placeholder="Bitte gib deinen Wohnort an"
                        class ="form-control input-sm" required=""/>
                    </div>
					<div class="form-group">
                        <label for="t_semester">Bitte gib die Anzahl deiner bisherigen Semester an.</label>
                        <input type="text" id="t_semester" name="t_semester" placeholder="Bitte gib dein Semester an"
                        class ="form-control input-sm" required=""/>
                    </div>
					<div class="form-group">
                        <label for="t_myfile">Bitte lade ein Bild von dir hoch (optional). [Wenn möglich bitte quadratisches Bild!]</label>
                        <input type="file" id="t_myfile" name="t_myfile" class ="form-control input-sm" accept=".png,.gif,.jpg"/>
                    </div>
					
                <h2>Angaben zu deiner Person im Team</h2>
                <div class="form-group">
                        <label for="t_stärke">Welche Stärke besitzt du im Team?</label>
                        <textarea id="t_stärke" name="t_stärke" placeholder="Bitte gib deine genaue Stärke im Team an" class ="form-control input-sm"></textarea> 
                    </div>
                <div class="form-group">
                        <label for="t_rolle">Welche Rolle hast du im Team?</label>
                        <input id="t_rolle" name="t_rolle" type="text" placeholder="Bitte gib eine genaue Rolle im Team an" class ="form-control input-sm">
                    </div>
                <div class="form-group">
                        <label for="t_ziel">Was ist dein Ziel in diesem Kurs?</label>
                        <textarea id="t_ziel" name="t_ziel" placeholder="Bitte dein Ziel für den Kurs an" class ="form-control input-sm"></textarea> 
                    </div>  


                    <div class="row-justify-content-center" action="http://511908657.swh.strato-hosting.eu/teamkonglomerat.de/teamvorstellung-ausgabe/">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <input type="submit" value="Speichern" class="btn btn-info btn-block" name="submitvorstellung">
                        </div> 
                    </div>
                </form>               	

				</main><!-- #main -->
			</div><!-- #primary -->

            <?php if ( $layout != 'no-sidebar' ) { ?>
                <?php get_sidebar(); ?>
            <?php } ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
