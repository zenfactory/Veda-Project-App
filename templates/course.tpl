        <div id="content">
        	<section>            	
                <h1>{$course}</h1>
                <p>Click on a lesson below to begin.</p>
				<div id="listEditorHeader" data-coursepath="{$classPath}">
					<span></span>
					<span></span>
				</div>
				<ul class="sectionList listEditor userCourse">
{foreach from=$sectionArray item="section"}
					<li>
						<span data-sectionpath={$section.path} data-sectionorder={$section.order}>
							<span class="expandedList"></span>
							<span class="sectionName">{$section.name}</span>
							<span>
                            </span>
						</span>
						<ul class="lessonList">
{foreach from=$section.lessons item="lesson"}
							<li>
								<span data-lessonpath={$lesson.path} data-lessonorder={$lesson.order}>
                                    <a href="{$lesson.link}">
                                        <span></span>
                                        <span class="lessonName">{$lesson.name}</span>
                                    </a>
                                    <span class="userCourseButtons">
                                        <a href="{$lesson.quizLink}"><img title="Take Quiz" class="quizIcon" src="img/editorIcons/quiz_icon.png" /></a>
                                        <a href="{$lesson.link}"><img title="Read Lesson" class="readLessonIcon" src="img/editorIcons/editLesson_icon.png" /></a>
                                    </span>
								</span>
							</li>
{/foreach}
						</ul>
					</li>
					
{/foreach}
				</ul>
            </section>
            
        </div>
