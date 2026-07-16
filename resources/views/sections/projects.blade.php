<section id="projects" class="pt-8 md:pt-10 lg:pt-12 pb-16 md:pb-20 lg:pb-24 bg-[#F8FAFC] dark:bg-[#111827] relative transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div data-aos="fade-up" class="mb-16">
            <x-section-title 
                title="Featured Projects" 
                subtitle="Projects that represent my skills and experience." 
                alignment="center" 
            />
        </div>

        <!-- Professional Projects -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-8 transition-colors duration-300">Professional Project</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects['professional'] ?? [] as $index => $project)
                    <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <x-card.project 
                            :title="$project['title']"
                            :category="$project['category']"
                            :description="$project['description']"
                            :technologies="$project['technologies']"
                            :status="$project['status']"
                            :image="$project['image']"
                            :githubUrl="$project['github_url']"
                            :demoUrl="$project['demo_url']"
                            :isPrivate="$project['is_private'] ?? false"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Academic Projects -->
        <div>
            <h3 class="text-2xl font-bold text-[#0F2C59] dark:text-[#F8FAFC] mb-8 transition-colors duration-300">Academic Project</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects['academic'] ?? [] as $index => $project)
                    <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <x-card.project 
                            :title="$project['title']"
                            :category="$project['category']"
                            :description="$project['description']"
                            :technologies="$project['technologies']"
                            :status="$project['status']"
                            :image="$project['image']"
                            :githubUrl="$project['github_url']"
                            :demoUrl="$project['demo_url']"
                            :isPrivate="$project['is_private'] ?? false"
                        />
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
