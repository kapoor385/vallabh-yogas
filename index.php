<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vallabh Yoga — Modern Mind & Body Wellness</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Navigation -->
  <nav class="navbar" id="navbar">
    <div class="nav-container">
      <a href="#" class="logo">✦ <span>Vallabh Yoga</span></a>
      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#offerings">Classes</a></li>
        <li><a href="#stats">Result</a></li>
        <li><a href="#nutrition">Nutrition</a></li>
        <li><a href="#testimonials">Reviews</a></li>
        <li><a href="#app">App</a></li>
        <li><a href="#contact" class="btn-nav">Start Free</a></li>
      </ul>
      <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-bg-overlay"></div>
    <div class="hero-content">
      <p class="hero-tag">YOGA • MINDFULNESS • MOVEMENT • BREATH • BALANCE</p>
      <h1 class="hero-title">Holistic<br><span class="highlight">Mind+Body</span><br>Wellness</h1>
      <p class="hero-subtitle">Yoga that powers your body & calms your soul. Studies show people who practice yoga use <strong>43% fewer medical services</strong> and save over $25,000 a year.</p>
      <div class="hero-buttons">
        <a href="#contact" class="btn-primary">Start Your Journey</a>
        <a href="#offerings" class="btn-secondary">Explore Classes</a>
      </div>
      <div class="hero-scroll">
        <a href="#stats"><i class="fas fa-chevron-down"></i></a>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats" id="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number" data-target="24">0</div>
          <div class="stat-suffix">%</div>
          <h3>Increased Endurance</h3>
          <p>Enhancement in Cardio Vascular & Muscular Endurance</p>
        </div>
        <div class="stat-card">
          <div class="stat-number" data-target="30">0</div>
          <div class="stat-suffix">%</div>
          <h3>Strength Gains</h3>
          <p>8 weeks of yoga can boost upper body strength by 30%</p>
        </div>
        <div class="stat-card">
          <div class="stat-number" data-target="31">0</div>
          <div class="stat-suffix">%</div>
          <h3>Stress Reduction</h3>
          <p>12 weeks of yoga can reduce stress levels by 31%</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Offerings Section -->
  <section class="offerings" id="offerings">
    <div class="container">
      <h2 class="section-title">A Complete Practice for<br><span class="highlight">Mind, Body & Everyday Balance</span></h2>
      <div class="offerings-grid">
        <div class="offering-card">
          <div class="offering-icon">🧘</div>
          <h3>Yoga</h3>
          <p>From Vinyasa to Hatha, Ashtanga to Yin — flows for every level and mood.</p>
          <ul class="offering-tags">
            <li>Vinyasa</li>
            <li>Hatha</li>
            <li>Ashtanga</li>
            <li>Yin</li>
          </ul>
        </div>
        <div class="offering-card">
          <div class="offering-icon">🧠</div>
          <h3>Meditation</h3>
          <p>Guided breath work and mindfulness sessions to centre your day.</p>
          <ul class="offering-tags">
            <li>Guided</li>
            <li>Breath Work</li>
            <li>Mantra</li>
            <li>Sleep</li>
          </ul>
        </div>
        <div class="offering-card">
          <div class="offering-icon">💪</div>
          <h3>Strength Training</h3>
          <p>Bodyweight & resistance programs designed for yogis who want power.</p>
          <ul class="offering-tags">
            <li>Core</li>
            <li>HIIT</li>
            <li>Pilates</li>
            <li>Mobility</li>
          </ul>
        </div>
        <div class="offering-card">
          <div class="offering-icon">💃</div>
          <h3>Dance Fitness</h3>
          <p>High-energy dance workouts that make cardio feel like celebration.</p>
          <ul class="offering-tags">
            <li>Bollywood</li>
            <li>Latin</li>
            <li>Afro</li>
            <li>Hip Hop</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Wellness Photo Showcase -->
  <section class="photo-showcase" aria-label="Wellness inspiration">
    <div class="container">
      <div class="photo-showcase-grid">
        <div class="photo-tile photo-one">
          <div><span>Move</span><strong>Find your flow</strong></div>
        </div>
        <div class="photo-tile photo-two">
          <div><span>Breathe</span><strong>Slow down & reconnect</strong></div>
        </div>
        <div class="photo-tile photo-three">
          <div><span>Restore</span><strong>Make space for balance</strong></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nutrition Section -->
  <section class="nutrition" id="nutrition">
    <div class="container">
      <div class="nutrition-grid">
        <div class="nutrition-content">
          <h2 class="section-title left">Nourish Your Body with<br><span class="highlight">Simple, Supportive Nutrition</span></h2>
          <p>Personalised meal plans, Ayurvedic diet guidance, and macro tracking — all integrated with your workout schedule for maximum results.</p>
          <ul class="nutrition-features">
            <li><i class="fas fa-check-circle"></i> Personalised meal plans</li>
            <li><i class="fas fa-check-circle"></i> Ayurvedic diet guidance</li>
            <li><i class="fas fa-check-circle"></i> Macro & micro tracking</li>
            <li><i class="fas fa-check-circle"></i> Recipe library (500+)</li>
            <li><i class="fas fa-check-circle"></i> Synced with your workout schedule</li>
          </ul>
          <a href="#contact" class="btn-primary">Get Nutrition Plan</a>
        </div>
        <div class="nutrition-visual">
          <div class="dashboard-mockup">
            <div class="dash-header">
              <span>Your Personal Dashboard</span>
            </div>
            <div class="dash-body">
              <div class="dash-card">
                <div class="dash-ring">
                  <svg viewBox="0 0 120 120">
                    <circle cx="60" cy="60" r="52" fill="none" stroke="#2a2a4a" stroke-width="8"/>
                    <circle cx="60" cy="60" r="52" fill="none" stroke="#e8a838" stroke-width="8" stroke-dasharray="260 327" stroke-linecap="round" transform="rotate(-90 60 60)"/>
                  </svg>
                  <span class="dash-ring-label">78%</span>
                </div>
                <p>Weekly Goal</p>
              </div>
              <div class="dash-stats">
                <div class="dash-stat">
                  <i class="fas fa-fire"></i>
                  <div>
                    <strong>1,847</strong>
                    <span>Calories</span>
                  </div>
                </div>
                <div class="dash-stat">
                  <i class="fas fa-dumbbell"></i>
                  <div>
                    <strong>4 / 5</strong>
                    <span>Workouts</span>
                  </div>
                </div>
                <div class="dash-stat">
                  <i class="fas fa-om"></i>
                  <div>
                    <strong>3 / 3</strong>
                    <span>Meditation</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Goals / Progress Section -->
  <section class="goals">
    <div class="container">
      <h2 class="section-title">Set Your Goals &<br><span class="highlight">Watch Your Progress</span></h2>
      <div class="goals-grid">
        <div class="goal-item">
          <div class="goal-icon">🎯</div>
          <h4>Set Targets</h4>
          <p>Choose weight, flexibility, mindfulness or performance goals</p>
        </div>
        <div class="goal-item">
          <div class="goal-icon">📊</div>
          <h4>Track Daily</h4>
          <p>Auto-log sessions, nutrition, sleep and stress levels</p>
        </div>
        <div class="goal-item">
          <div class="goal-icon">🏆</div>
          <h4>Achieve & Celebrate</h4>
          <p>Earn badges, climb the leaderboard, share milestones</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leaderboard Section -->
  <section class="leaderboard">
    <div class="container">
      <h2 class="section-title"><span class="highlight">Yogi</span> Leaderboard</h2>
      <div class="leaderboard-grid">
        <div class="leader-card top">
          <div class="leader-rank">#1</div>
          <div class="leader-avatar" style="background: linear-gradient(135deg, #e8a838, #f0c66e);">A</div>
          <div class="leader-info">
            <strong>Anusha</strong>
            <span>Etobicoke, ON, CA</span>
          </div>
          <div class="leader-hours">73.2 hr</div>
        </div>
        <div class="leader-card">
          <div class="leader-rank">#2</div>
          <div class="leader-avatar" style="background: linear-gradient(135deg, #7c6df0, #a89cf7);">D</div>
          <div class="leader-info">
            <strong>DiAnna</strong>
            <span>54 Sessions • Joined Jun '24</span>
          </div>
          <div class="leader-hours">68.5 hr</div>
        </div>
        <div class="leader-card">
          <div class="leader-rank">#3</div>
          <div class="leader-avatar" style="background: linear-gradient(135deg, #38c9a8, #6ee7c8);">N</div>
          <div class="leader-info">
            <strong>Nicole</strong>
            <span>54 Sessions • Joined Jun '24</span>
          </div>
          <div class="leader-hours">61.0 hr</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <div class="container">
      <h2 class="section-title">What Our <span class="highlight">Students</span> Say</h2>
      <div class="testimonial-grid">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"Great class as always. I had to leave a few minutes before the end because of my next class but I still enjoyed every minute. Thank you!"</p>
          <div class="testimonial-author">
            <div class="author-avatar" style="background: linear-gradient(135deg, #e8a838, #f0c66e);">P</div>
            <div>
              <strong>Patanjali Reddy</strong>
              <span>4.75 ★ • 120+ classes</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"Shwetha was so helpful and took the time to guide me through the App after the class 🙏 Thank you 💝 The community here is amazing."</p>
          <div class="testimonial-author">
            <div class="author-avatar" style="background: linear-gradient(135deg, #7c6df0, #a89cf7);">S</div>
            <div>
              <strong>Sneha Patel</strong>
              <span>4.9 ★ • 85+ classes</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>"What my Yoga Morning Run looked like! The flexibility and strength gains are incredible. Best investment in my health."</p>
          <div class="testimonial-author">
            <div class="author-avatar" style="background: linear-gradient(135deg, #38c9a8, #6ee7c8);">N</div>
            <div>
              <strong>Nadine Schaeffer</strong>
              <span>4.8 ★ • 10 months+</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- App Section -->
  <section class="app-section" id="app">
    <div class="container">
      <div class="app-grid">
        <div class="app-content">
          <h2 class="section-title left">Carry Your Workout<br><span class="highlight">Anywhere. Anytime!</span></h2>
          <div class="app-stats">
            <div class="app-stat">
              <strong>24</strong>
              <span>Timezones</span>
            </div>
            <div class="app-stat">
              <strong>1.2M+</strong>
              <span>Hours of Classes</span>
            </div>
            <div class="app-stat">
              <strong>40+</strong>
              <span>Countries</span>
            </div>
          </div>
          <div class="app-features">
            <div class="app-feature">
              <i class="fas fa-mobile-alt"></i>
              <div>
                <strong>Live & On-Demand</strong>
                <p>Join live classes or practice at your own pace</p>
              </div>
            </div>
            <div class="app-feature">
              <i class="fas fa-users"></i>
              <div>
                <strong>Community Feed</strong>
                <p>Share milestones and stay motivated together</p>
              </div>
            </div>
            <div class="app-feature">
              <i class="fas fa-chart-line"></i>
              <div>
                <strong>Progress Tracking</strong>
                <p>Dashboard, goals, streaks & leaderboard</p>
              </div>
            </div>
          </div>
          <div class="app-buttons">
            <a href="#" class="store-btn"><i class="fab fa-apple"></i> <div><small>Download on the</small><strong>App Store</strong></div></a>
            <a href="#" class="store-btn"><i class="fab fa-google-play"></i> <div><small>Get it on</small><strong>Google Play</strong></div></a>
          </div>
        </div>
        <div class="app-phone">
          <div class="phone-frame">
            <div class="phone-notch"></div>
            <div class="phone-screen">
              <div class="phone-header">
                <span class="phone-time">9:41</span>
                <div class="phone-icons">
                  <i class="fas fa-signal"></i>
                  <i class="fas fa-wifi"></i>
                  <i class="fas fa-battery-full"></i>
                </div>
              </div>
              <div class="phone-body">
                <h4>Good Morning 🌅</h4>
                <p class="phone-sub">Today's Schedule</p>
                <div class="phone-class">
                  <div class="phone-class-dot"></div>
                  <div>
                    <strong>Beginner Yoga</strong>
                    <span>8:15 AM • Shwetha R.</span>
                  </div>
                </div>
                <div class="phone-class">
                  <div class="phone-class-dot purple"></div>
                  <div>
                    <strong>Meditation</strong>
                    <span>9:00 AM • Dr. Anil</span>
                  </div>
                </div>
                <div class="phone-class">
                  <div class="phone-class-dot green"></div>
                  <div>
                    <strong>Dance Fitness</strong>
                    <span>5:30 PM • Priya M.</span>
                  </div>
                </div>
                <div class="phone-progress">
                  <p>This Week</p>
                  <div class="phone-progress-bar">
                    <div class="phone-progress-fill" style="width: 78%"></div>
                  </div>
                  <span>78% complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Members Section -->
  <section class="members">
    <div class="container">
      <h2 class="section-title">Long-term <span class="highlight">Members</span></h2>
      <div class="members-scroll">
        <div class="member-card">
          <div class="member-avatar" style="background: linear-gradient(135deg, #e8a838, #f0c66e);">N</div>
          <strong>Nadine</strong>
          <span>10 months +</span>
        </div>
        <div class="member-card">
          <div class="member-avatar" style="background: linear-gradient(135deg, #7c6df0, #a89cf7);">A</div>
          <strong>Arvind</strong>
          <span>39 months +</span>
        </div>
        <div class="member-card">
          <div class="member-avatar" style="background: linear-gradient(135deg, #38c9a8, #6ee7c8);">P</div>
          <strong>Priya</strong>
          <span>12 months +</span>
        </div>
        <div class="member-card">
          <div class="member-avatar" style="background: linear-gradient(135deg, #f06292, #f48fb1);">O</div>
          <strong>Olga</strong>
          <span>19 months +</span>
        </div>
        <div class="member-card">
          <div class="member-avatar" style="background: linear-gradient(135deg, #42a5f5, #90caf9);">G</div>
          <strong>Gaudencia</strong>
          <span>8 months +</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact / CTA Section -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-content">
          <h2>Begin Your<br><span class="highlight">Wellness Journey</span></h2>
          <p>Join thousands of practitioners worldwide. Start with a free 7-day trial — no commitment, no credit card required.</p>
          <div class="contact-features">
            <div><i class="fas fa-check"></i> Unlimited live & on-demand classes</div>
            <div><i class="fas fa-check"></i> Personalised nutrition plans</div>
            <div><i class="fas fa-check"></i> Progress dashboard & leaderboard</div>
            <div><i class="fas fa-check"></i> 40+ countries, 24 timezones</div>
          </div>
        </div>
        <form class="contact-form" id="contactForm">
          <h3>Start Free Trial</h3>
          <div class="form-group">
            <input type="text" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" placeholder="Email Address" required>
          </div>
          <div class="form-group">
            <select>
              <option>Select Your Goal</option>
              <option>Flexibility & Mobility</option>
              <option>Strength & Fitness</option>
              <option>Stress Relief & Meditation</option>
              <option>Weight Management</option>
              <option>Overall Wellness</option>
            </select>
          </div>
          <button type="submit" class="btn-primary full">Start 7-Day Free Trial</button>
          <p class="form-note">No credit card required. Cancel anytime.</p>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <h3>✦ Vallabh Yoga</h3>
          <p>Holistic Mind+Body Wellness for the modern world. Yoga, meditation, strength & nutrition — all in one place.</p>
          <div class="social-links">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="footer-col">
          <h4>Classes</h4>
          <a href="#">Yoga</a>
          <a href="#">Meditation</a>
          <a href="#">Strength Training</a>
          <a href="#">Dance Fitness</a>
          <a href="#">Breath Work</a>
        </div>
        <div class="footer-col">
          <h4>Company</h4>
          <a href="#">About Us</a>
          <a href="#">Our Teachers</a>
          <a href="#">Blog</a>
          <a href="#">Careers</a>
          <a href="#">Press</a>
        </div>
        <div class="footer-col">
          <h4>Support</h4>
          <a href="#">Help Center</a>
          <a href="#">Contact Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Refund Policy</a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2026 Vallabh Yoga. All rights reserved.</p>
        <p>Made with 🧘 & 💜</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
